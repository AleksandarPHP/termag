<?php

namespace App\Http\Controllers;

use App\Models\Masage;
use Illuminate\Http\Request;
use Cache;
use App\Helpers\Helper;

class MasageController extends Controller
{
    public function index()
    {
        return view('cms.massage.list');
    }  

    public function ajax(Request $request)
    {       

        $data = [];

        $columns = array( 
            0 =>'id',
            1 =>'title'
        );

        $sortable = [0, 1];

        $sqlRec = Masage::query();


        $search = $request['search']['value'];
        if(!empty($search) && !is_null($search) && is_string($search) && $search!="") {
            $sqlRec->where(function($q) use ($search) {
                $q->whereRaw("(title like ?)", ["%$search%"]);
            });
        }
        
        $totalRecords = $sqlRec->count();

        $order = $request['order'];
        if(!empty($order) && !is_null($order) && is_array($order))
            foreach($order as $key => $value) {
                if(in_array($value['column'], $sortable) && ($value['dir'] == "asc" || $value['dir'] == "desc"))
                    $sqlRec->orderBy($columns[$value['column']], $value['dir']);
            }
        
        $length = (intval($request['length']) > 0) ? intval($request['length']) : 10;
        $start = intval($request['start']);
        $rows = $sqlRec->take($length)->skip($start)->get();
        
        foreach($rows as $row) {
            $data[] = [
                '0' => $row->id,
                '1' => $row->title,
                '2' => $row->category,
                '3' => '<a href="'.url('cms/massage/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a>',
                '4' => '<a href="'.url('cms/massage').'" class="action-delete confirmation" data-id="'.$row->id.'"><i class="fa fa-trash"></i><form id="delete-form'.$row->id.'" action="'.url('cms/massage/'.$row->id).'" method="POST" style="display: none;">'.csrf_field().'<input type="hidden" name="_method" value="delete" /></form></a>',
            ];
        }
        
        $json_data = array(
                    "draw"            => intval($request['draw']),  
                    "recordsTotal"    => intval($totalRecords),  
                    "recordsFiltered" => intval($totalRecords), 
                    "data"            => $data   
                    );
            
        return json_encode($json_data);
    }

    public function create()
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.massage.form', ['item' => new Masage, 'editing' => false, 'lang' => $lang]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['required', 'string', 'max:191'],
            'category' => ['required', 'string', 'max:191'],
            'price' => ['required', 'string', 'max:191'],
            'text' => ['nullable', 'string'],
            'url' => ['nullable', 'string', 'max:191'],
            'urlTitle' => ['nullable', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);  
        
        $image = null;
        if($request->hasFile('image')){
            $image = Helper::saveImage($request->image, 'Massage', $request->title);
        }

        $massage = new Masage;
        $massage->setTranslation('title', $lang, $request->title);
        $massage->setTranslation('text', $lang, $request->text);
        $massage->setTranslation('urlTitle', $lang, $request->urlTitle);

        $massage->url = $request->url;
        $massage->category = $request->category;
        $massage->price = intval($request->price);
        $massage->image = $image;
        $massage->is_active = $request->is_active ? 1 : 0;
        $massage->save();

        Cache::forget('massage');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/massage');
    }

    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.massage.form', ['item' => Masage::findOrFail($id), 'editing' => true, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $massage = Masage::findOrFail($id);
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'text' => ['nullable', 'string'],
            'category' => ['required', 'string', 'max:191'],
            'price' => ['required', 'string', 'max:191'],
            'url' => ['nullable', 'string', 'max:191'],
            'urlTitle' => ['nullable', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg', 'image', 'max:5000'],
        ]);  
        
        $image = $massage->image;
        if($request->hasFile('image')) $image = Helper::saveImage($request->image, 'Massage', $massage->title, $image);
        else if($massage->title != $massage->title && !is_null($image)) $image = Helper::renameImage($image, 'massage', $massage->title);

        $massage->setTranslation('title', $lang, $request->title);
        $massage->setTranslation('text', $lang, $request->text);
        $massage->setTranslation('urlTitle', $lang, $request->urlTitle);

        $massage->url = $request->url;
        $massage->category = $request->category;
        $massage->price = intval($request->price);
        $massage->image = $image;
        $massage->is_active = $request->is_active ? 1 : 0;
        $massage->save();

        Cache::forget('massage');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/massage');
    }

    public function destroy($id)
    {
        $item = Masage::findOrFail($id);
        
        Helper::deleteImage($item->images ?? null);
        $item->delete();

        Cache::forget('massage');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/massage');
    }

    public function removeImage($id)
    {
        $item = Masage::findOrFail($id);        
        $image = $item->image;
        if(Helper::deleteImage($image ?? null)) {
            $images = null;
            $item->image = $images;
            $item->save();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('massage');

        session()->flash('success', 'Izmjenjeno.');

        return back();
    }
}

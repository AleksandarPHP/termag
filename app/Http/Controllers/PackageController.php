<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Helpers\Helper;
use Cache;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }

    public function index()
    {
        return view('cms.packages.list');
    }  

    public function ajax(Request $request)
    {       

        $data = [];

        $columns = array( 
            0 =>'id',
            1 =>'title',
            2 =>'meta',
            3 =>'action'
        );

        $sortable = [0, 1];

        $sqlRec = Package::query();


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
                '2' => '<a href="'.url('cms/packages/'.$row->id.'/options').'" class="action-edit"><i class="fa-solid fa-plus"></i></a>',
                '3' => '<a href="'.url('cms/packages/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a>',
                '4' => '<a href="'.url('cms/packages').'" class="action-delete confirmation" data-id="'.$row->id.'"><i class="fa fa-trash"></i><form id="delete-form'.$row->id.'" action="'.url('cms/packages/'.$row->id).'" method="POST" style="display: none;">'.csrf_field().'<input type="hidden" name="_method" value="delete" /></form></a>',
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

    public function options($id)
    {
        return view('cms.options.list', ['id' => $id]);
    }

    public function create()
    {

        $lang = $request->lang ?? 'sr';

        return view('cms.packages.form', ['item' => new Package, 'editing' => false, 'lang' => $lang]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'text' => ['nullable', 'string'],
            'url' => ['nullable', 'string', 'max:191'],
            'urlTitle' => ['nullable', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'special' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);  
        
        $image = null;
        if($request->hasFile('image')){
            $image = Helper::saveImage($request->image, 'Packages', $request->title);
        }

        $package = new Package;
        $package->setTranslation('title', $lang, $request->title);
        $package->setTranslation('text', $lang, $request->text);
        $package->setTranslation('urlTitle', $lang, $request->urlTitle);

        $package->url = $request->url;
        $package->image = $image;
        $package->is_active = $request->is_active ? 1 : 0;
        $package->special = $request->special ? 1 : 0;
        $package->save();

        Cache::forget('package');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/packages');
    }

    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.packages.form', ['item' => Package::findOrFail($id), 'editing' => true, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'text' => ['nullable', 'string'],
            'url' => ['nullable', 'string', 'max:191'],
            'urlTitle' => ['nullable', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'special' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg', 'image', 'max:5000'],
        ]);  
        
        $image = $package->image;
        if($request->hasFile('image')) $image = Helper::saveImage($request->image, 'Packages', $package->title, $image);
        else if($package->title != $package->title && !is_null($image)) $image = Helper::renameImage($image, 'Packages', $package->title);

        $package->setTranslation('title', $lang, $request->title);
        $package->setTranslation('text', $lang, $request->text);
        $package->setTranslation('urlTitle', $lang, $request->urlTitle);

        if($lang=='sr') {     
            $package->url = $request->url;
            $package->image = $image;
            $package->is_active = $request->is_active ? 1 : 0;
            $package->special = $request->special ? 1 : 0;
        }
        $package->save();

        Cache::forget('package');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/packages');
    }

    public function destroy($id)
    {
        $item = Package::findOrFail($id);
        
        Helper::deleteImage($item->images ?? null);
        $item->delete();

        Cache::forget('package');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/packages');
    }

    public function removeImage($id)
    {
        $item = Package::findOrFail($id);        
        $image = $item->image;
        if(Helper::deleteImage($image ?? null)) {
            $images = null;
            $item->image = $images;
            $item->save();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('package');

        session()->flash('success', 'Izmjenjeno.');

        return back();
    }
}

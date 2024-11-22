<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Helpers\Helper;
use Cache;

class PageController extends Controller
{
    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }

    public function index()
    {
        return view('cms.pages.list');
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

        $sqlRec = Page::query()->whereNull('parent_id');


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
                '2' => '<a href="'.url('cms/pages/meta/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a>',
                '3' => '<a href="'.url('cms/pages/detail/'.$row->id).'" class="action-edit"><i class="fa fa-edit"></i></a>',
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

    public function detail(Request $request, $id) 
    {
        return view('cms.pages.single-list', ['id' => $id]);
    }

    public function ajaxDetail(Request $request, $id)
    {       

        $data = [];

        $columns = array( 
            0 =>'id',
            1 =>'title',
            2 =>'action'
        );

        $sortable = [0, 1];

        $sqlRec = Page::query()->where('parent_id',  $id);

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
                '2' => '<a href="'.url('cms/pages/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a>',
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

    public function edit($id, Request $request)
    {
        $width = $height = 0;
        $lang = $request->lang ?? 'sr';

        return view('cms.pages.form', ['item' => Page::findOrFail($id), 'editing' => true, 'width' => $width, 'height' => $height, 'lang' => $lang]);
    }

    public function meta($id, Request $request)
    {
        $width = $height = 0;
        $lang = $request->lang ?? 'sr';

        return view('cms.pages.form-meta', ['item' => Page::findOrFail($id), 'editing' => true, 'width' => $width, 'height' => $height, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $item = Page::findOrFail($id);
        $lang = $request->language ?? 'sr';

        $width = $height = 0;

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'subtitle' => ['nullable', 'string'],
            'text' => ['nullable', 'string'],
            'url' => ['nullable', 'string', 'max:191'],
            'urlTitle' => ['nullable', 'string', 'max:191'],
            'url2' => ['nullable', 'string', 'max:191'],
            'urlTitle2' => ['nullable', 'string', 'max:191'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000', 'dimensions:min_width='.$width.',min_height='.$height],

        ]);    

        $image = $item->image;
        if($request->hasFile('image')) $image = Helper::saveImage($request->image, 'Pages', $item->title, $image);
        else if($item->title != $item->title && !is_null($image)) $image = Helper::renameImage($image, 'Pages', $item->title);

        $item->setTranslation('title', $lang, $request->input('title'));
        $item->setTranslation('subtitle', $lang, $request->input('subtitle'));
        $item->setTranslation('text', $lang, $request->input('text'));
        $item->setTranslation('urlTitle', $lang, $request->input('urlTitle'));
        $item->setTranslation('urlTitle2', $lang, $request->input('urlTitle2'));
        $item->setTranslation('meta_title', $lang, $request->input('meta_title'));
        $item->setTranslation('meta_description', $lang, $request->input('meta_description'));


        if($lang=='sr') {      
            $item->image = $image;
            $item->url = $request->url;
            $item->url2 = $request->url2;
        }

        $item->save();

        Cache::forget('texts-'.$item->id);

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/pages');
    }

    public function removeImage(Request $request, $id)
    {
        $checkArray = ['image'];

        $checkArray = implode(",", $checkArray);

        $request->validate([
            'image' => ['required', 'in:'.$checkArray],
        ]);

        $item = Page::findOrFail($id);

        if(Helper::deleteImage($item[$request->image])) {
            $item[$request->image] = null;
            $item->save();
        } else {
            session()->flash('error', 'Došlo je do greške.');
            return back()->with('error', 'Failed to find that resource');
        }

        Cache::forget('texts-'.$item->id);

        session()->flash('success', 'Izmjenjeno.');
        return back();
    }
}

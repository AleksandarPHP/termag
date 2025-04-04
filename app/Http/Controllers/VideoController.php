<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Cache;
use App\Helpers\Helper;

class VideoController extends Controller
{
    private $allowedLangs;

    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }
    public function index()
    {
        return view('cms.videos.list');
    }

    public function ajax(Request $request)
    {       

        $data = [];

        $columns = array( 
            0 =>'id',
            1 =>'title',
            2 =>'action'
        );

        $sortable = [0, 1];

        $sqlRec = Video::query();


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
                '2' => '<a href="'.url('cms/videos/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a><a href="'.url('cms/users').'" class="action-delete confirmation" data-id="'.$row->id.'"><i class="fa fa-trash"></i><form id="delete-form'.$row->id.'" action="'.url('cms/users/'.$row->id).'" method="POST" style="display: none;">'.csrf_field().'<input type="hidden" name="_method" value="delete" /></form></a>',
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

        return view('cms.videos.form', ['item' => new Video, 'editing' => false, 'lang' => $lang]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['required', 'string', 'max:191'],
            'embed' => ['nullable', 'string'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);  
        
        $image = null;
        if($request->hasFile('image')){
            $image = Helper::saveImage($request->image, 'videos', $request->name);
        }

        $video = new Video;
        $video->setTranslation('title', $lang, $request->title);

        $video->embed = $request->embed;
        $video->image = $image;
        $video->is_active = $request->is_active ? 1 : 0;
        $video->save();

        Cache::forget('video');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/videos');
    }

    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.videos.form', ['item' => Video::findOrFail($id), 'editing' => true, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'embed' => ['nullable', 'string'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);  
        
        $image = $video->image;
        if($request->hasFile('image')) $image = Helper::saveImage($request->image, 'Videos', $video->name, $image);
        else if($video->name != $video->name && !is_null($image)) $image = Helper::renameImage($image, 'Videos', $video->name);

        $video->setTranslation('title', $lang, $request->title);


        if($lang=='sr') {      
            $video->embed = $request->embed;
            $video->image = $image;
            $video->is_active = $request->is_active ? 1 : 0;
        }

        $video->save();

        Cache::forget('video');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/videos');
    }

    public function destroy($id)
    {
        $item = Video::findOrFail($id);
        
        Helper::deleteImage($item->images ?? null);
        $item->delete();

        Cache::forget('video');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/video');
    }

    public function removeImage($id)
    {
        $item = Video::findOrFail($id);        
        $image = $item->image;
        if(Helper::deleteImage($image ?? null)) {
            $images = null;
            $item->image = $images;
            $item->save();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('video');

        session()->flash('success', 'Izmjenjeno.');

        return back();
    }
}

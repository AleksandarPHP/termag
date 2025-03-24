<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Cache;
use App\Helpers\Helper;

class BlogController extends Controller
{
    public function index()
    {
        return view('cms.blogs.list');
    }  

    public function ajax(Request $request)
    {       

        $data = [];

        $columns = array( 
            0 =>'id',
            1 =>'title'
        );

        $sortable = [0, 1];

        $sqlRec = Blog::query();


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
                '2' => '<a href="'.url('cms/blogs/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a>',
                '3' => '<a href="'.url('cms/blogs').'" class="action-delete confirmation" data-id="'.$row->id.'"><i class="fa fa-trash"></i><form id="delete-form'.$row->id.'" action="'.url('cms/blogs/'.$row->id).'" method="POST" style="display: none;">'.csrf_field().'<input type="hidden" name="_method" value="delete" /></form></a>',
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

        return view('cms.blogs.form', ['item' => new Blog, 'editing' => false, 'lang' => $lang]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';
        $request->validate([
            'title' => ['required', 'string', 'max:191'],
            'subtitle' => ['required', 'string', 'max:191'],
            'text' => ['nullable', 'string'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);  
        
        $image = null;
        if($request->hasFile('image')){
            $image = Helper::saveImage($request->image, 'Blogs', $request->title);
        }

        $blog = new Blog;
        $blog->setTranslation('title', $lang, $request->title);
        $blog->setTranslation('text', $lang, $request->text);
        $blog->setTranslation('subtitle', $lang, $request->subtitle);

        $blog->image = $image;
        $blog->is_active = $request->is_active ? 1 : 0;
        $blog->save();

        Cache::forget('blog');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/blogs');
    }

    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.blogs.form', ['item' => Blog::findOrFail($id), 'editing' => true, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'text' => ['nullable', 'string'],
            'subtitle' => ['nullable', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg', 'image', 'max:5000'],
        ]);  
        
        $image = $blog->image;
        if($request->hasFile('image')) $image = Helper::saveImage($request->image, 'Blogs', $blog->title, $image);
        else if($blog->title != $blog->title && !is_null($image)) $image = Helper::renameImage($image, 'Blogs', $blog->title);

        $blog->setTranslation('title', $lang, $request->title);
        $blog->setTranslation('text', $lang, $request->text);
        $blog->setTranslation('subtitle', $lang, $request->subtitle);

        if($lang == 'sr') {     
            $blog->image = $image;
            $blog->is_active = $request->is_active ? 1 : 0;
        }
        $blog->save();

        Cache::forget('blog');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/blogs');
    }

    public function destroy($id)
    {
        $item = Blog::findOrFail($id);
        
        Helper::deleteImage($item->image ?? null);
        $item->delete();

        Cache::forget('blog');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/blogs');
    }

    public function removeImage($id)
    {
        $item = Blog::findOrFail($id);        
        $image = $item->image;
        if(Helper::deleteImage($image ?? null)) {
            $images = null;
            $item->image = $images;
            $item->save();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('blogs');

        session()->flash('success', 'Izmjenjeno.');

        return back();
    }
}

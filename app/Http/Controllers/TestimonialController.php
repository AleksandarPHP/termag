<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Cache;
use App\Helpers\Helper;

class TestimonialController extends Controller
{
    private $allowedLangs;

    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }
    public function index()
    {
        return view('cms.testimonials.list');
    }

    public function ajax(Request $request)
    {       

        $data = [];

        $columns = array( 
            0 =>'id',
            1 =>'name',
            2 =>'action'
        );

        $sortable = [0, 1];

        $sqlRec = Testimonial::query();


        $search = $request['search']['value'];
        if(!empty($search) && !is_null($search) && is_string($search) && $search!="") {
            $sqlRec->where(function($q) use ($search) {
                $q->whereRaw("(name like ?)", ["%$search%"]);
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
                '1' => $row->name,
                '2' => '<a href="'.url('cms/testimonials/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a><a href="'.url('cms/users').'" class="action-delete confirmation" data-id="'.$row->id.'"><i class="fa fa-trash"></i><form id="delete-form'.$row->id.'" action="'.url('cms/users/'.$row->id).'" method="POST" style="display: none;">'.csrf_field().'<input type="hidden" name="_method" value="delete" /></form></a>',
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

        return view('cms.testimonials.form', ['item' => new Testimonial, 'editing' => false, 'lang' => $lang]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'name' => ['nullable', 'string', 'max:191'],
            'short_description' => ['nullable', 'string'],
            'description' => ['nullable', 'string', 'max:191'],
            'stars' => ['nullable', 'numeric', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);  
        
        $image = null;
        if($request->hasFile('image')){
            $image = Helper::saveImage($request->image, 'Testimonials', $request->name);
        }

        $testimonial = new Testimonial;
        $testimonial->setTranslation('short_description', $lang, $request->short_description);
        $testimonial->setTranslation('description', $lang, $request->description);

        $testimonial->name = $request->name;
        $testimonial->stars = $request->stars;
        $testimonial->image = $image;
        $testimonial->is_active = $request->is_active ? 1 : 0;
        $testimonial->save();

        Cache::forget('testimonial');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/testimonials');
    }

    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.testimonials.form', ['item' => Testimonial::findOrFail($id), 'editing' => true, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $lang = $request->language ?? 'sr';

        $request->validate([
            'name' => ['nullable', 'string', 'max:191'],
            'short_description' => ['nullable', 'string'],
            'description' => ['nullable', 'string', 'max:191'],
            'stars' => ['nullable', 'numeric', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);  
        
        $image = $testimonial->image;
        if($request->hasFile('image')) $image = Helper::saveImage($request->image, 'Testimonials', $testimonial->name, $image);
        else if($testimonial->name != $testimonial->name && !is_null($image)) $image = Helper::renameImage($image, 'testimonials', $testimonial->name);

        $testimonial->setTranslation('short_description', $lang, $request->short_description);
        $testimonial->setTranslation('description', $lang, $request->description);


        if($lang=='sr') {      
            $testimonial->name = $request->name;
            $testimonial->stars = $request->stars;
            $testimonial->image = $image;
            $testimonial->is_active = $request->is_active ? 1 : 0;
        }

        $testimonial->save();

        Cache::forget('testimonial');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/testimonials');
    }

    public function destroy($id)
    {
        $item = Testimonial::findOrFail($id);
        
        Helper::deleteImage($item->images ?? null);
        $item->delete();

        Cache::forget('testimonial');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/testimonials');
    }

    public function removeImage($id)
    {
        $item = Testimonial::findOrFail($id);        
        $image = $item->image;
        if(Helper::deleteImage($image ?? null)) {
            $images = null;
            $item->image = $images;
            $item->save();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('testimonial');

        session()->flash('success', 'Izmjenjeno.');

        return back();
    }
}

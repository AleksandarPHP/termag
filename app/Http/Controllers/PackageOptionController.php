<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageOption;
use App\Helpers\Helper;
use Cache;

class PackageOptionController extends Controller
{
    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }

    public function index()
    {
        return view('cms.options.list');
    }  

    public function ajax(Request $request, $package_id)
    {       

        $data = [];
        $columns = array( 
            0 =>'id',
            1 =>'title',
            2 =>'meta',
            3 =>'action'
        );

        $sortable = [0, 1];

        $sqlRec = PackageOption::query()->where('package_id', $package_id);


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
                '2' => '<a href="'.url('cms/options/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a>',
                '3' => '<a href="'.url('cms/options').'" class="action-delete confirmation" data-id="'.$row->id.'"><i class="fa fa-trash"></i><form id="delete-form'.$row->id.'" action="'.url('cms/options/'.$row->id).'" method="POST" style="display: none;">'.csrf_field().'<input type="hidden" name="_method" value="delete" /></form></a>',
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
        $packages = Package::where('is_active', 1)->get();
        $lang = $request->lang ?? 'sr';
        $count = 12;

        return view('cms.options.form', ['item' => new PackageOption, 'editing' => false, 'lang' => $lang, 'count' => $count, 'packages' => $packages]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'package_id' => ['nullable', 'string'],
            'nights' => ['nullable', 'numeric', 'max:9999'],
            'price' => ['nullable', 'numeric', 'max:9999'],
            // 'options_key.*' => ['nullable', 'string', 'max:200'],
            // 'option_value.*' => ['nullable', 'string', 'max:200'],
            'is_active' => ['nullable', 'string', 'in:1'],
        ]);
        
        $image = [];
        for ($i=0; $i < 12; $i++){
            if($request->hasFile('option_value.'.$i))
                $image[] = Helper::saveImage($request['option_value.'.$i], 'Options', $request->title);
            else $image[] = null;
        }

        $options = [$request->option_key, $image];

        $option = new PackageOption;
        $option->setTranslation('title', $lang, $request->title);
        $option->setTranslation('price', $lang, $request->price);
        $option->setTranslation('options', $lang, $options);

        $option->package_id = $request->package_id;
        $option->nights = $request->nights;
        $option->is_active = $request->is_active;
        $option->save();

        Cache::forget('option');

        session()->flash('success', 'Dodano.');

        return redirect('cms/options');
    }

    public function edit(Request $request, $id)
    {
        $packages = Package::where('is_active', 1)->get();
        $lang = $request->lang ?? 'sr';
        $count = 12;

        return view('cms.options.form', ['item' => PackageOption::findOrFail($id), 'editing' => true, 'lang' => $lang, 'count' => $count, 'packages' => $packages]);
    }

    public function update(Request $request, $id)
    {
        $option = PackageOption::findOrFail($id);
        
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'package_id' => ['nullable', 'string'],
            'nights' => ['nullable', 'numeric', 'max:9999'],
            'price' => ['nullable', 'numeric', 'max:9999'],
            // 'options_key.*' => ['nullable', 'string', 'max:200'],
            // 'option_value.*' => ['nullable', 'string', 'max:200'],
            'is_active' => ['nullable', 'string', 'in:1'],
        ]);

        if($lang=='sr') {     
            $image = [];
            for ($i=0; $i < 12; $i++){
                if($request->hasFile('option_value.'.$i))
                    $image[] = Helper::saveImage($request['option_value.'.$i], 'Options', $request->title, $option->options[1][$i] ?? null);
                else if($option->title != $request->title && !is_null($option->options[1][$i] ?? null))
                    $image[] = Helper::renameImage($option->options[1][$i], 'Options', $request->title);
                else $image[] = $option->options[1][$i] ?? null;
            }
    
            $options = [$request->option_key, $image];
        } else {
            $options = [$request->option_key];
        }

        $option->setTranslation('title', $lang, $request->title);
        $option->setTranslation('price', $lang, $request->price);
        $option->setTranslation('options', $lang, $options);

        if($lang=='sr') {     
            $option->package_id = $request->package_id;
            $option->nights = $request->nights;
            $option->is_active = $request->is_active ? 1 : 0;
        }
        $option->save();

        Cache::forget( 'option');

        session()->flash('success', 'Dodano.');

        return redirect('cms/options');
    }

    public function destroy($id)
    {
        $option = PackageOption::findOrFail($id);
        for ($i=0; $i < 12; $i++) {Helper::deleteImage($option->options[1][$i] ?? null);}
        $option->delete();

        Cache::forget( 'option');

        session()->flash('success', 'Obrisano.');
        
        return redirect('cms/options');
    }

    public function removeImage($id, $image)
    {
        $item = PackageOption::findOrFail($id);        
        $images = $item->options[1];
        if(Helper::deleteImage($images[$image] ?? null)) {
            $images[$image] = null;
            $item->options = $images;
            $item->save();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget( 'option');

        session()->flash('success', 'Obrisano.');
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Cache;

class MenuController extends Controller
{
    private $allowedLangs;

    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }
    public function index()
    {
        return view('cms.menu.list');
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

        $sqlRec = Menu::query();


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
                '2' => '<a href="'.url('cms/menu/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-edit"></i></a>',
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
        $menus = Menu::where('is_active', 1)->get();

        return view('cms.menu.form', ['item' => new Menu, 'editing' => false, 'lang' => $lang, 'menus' => $menus]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'link' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'string', 'max:191'],
            'order' => ['nullable', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1'],
        ]);    

        $menu = new Menu;
        $menu->setTranslation('title', $lang, $request->title);
        $menu->setTranslation('link', $lang, $request->link);
        $menu->parent_id = $request->parent_id;
        $menu->order = $request->order;
        $menu->is_active = $request->is_active ? 1 : 0;
        $menu->save();

        Cache::forget('menu');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/menu');
    }

    public function edit(Request $request, $id) {

        $lang = $request->lang ?? 'sr';
        $menus = Menu::where('is_active', 1)->get();

        return view('cms.menu.form', ['item' => Menu::findOrFail($id), 'editing' => true, 'lang' => $lang, 'menus' => $menus]);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);0;
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'link' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'string', 'max:191'],
            'order' => ['nullable', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1']
        ]);  

        $menu->setTranslation('title', $lang, $request->input('title'));
        $menu->setTranslation('link', $lang, $request->input('link'));
        $menu->parent_id = $request->parent_id;
        $menu->order = $request->order;
        $menu->is_active = $request->is_active ? 1 : 0;
        $menu->save();

        Cache::forget('menu-'.$menu->id);

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/menu');
    }
}

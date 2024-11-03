<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

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
            2 =>'action'
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
                '2' => '<a href="'.url('cms/pages/detail/'.$row->id).'" class="action-edit"><i class="fa fa-edit"></i></a>',
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
        return view('cms.pages.single-list');
    }

    public function ajaxDetail(Request $request)
    {       

        $data = [];

        $columns = array( 
            0 =>'id',
            1 =>'title',
            2 =>'action'
        );

        $sortable = [0, 1];

        $sqlRec = Page::query()->where('parent_id', 1);

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
}

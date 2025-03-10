<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;
use App\Notifications\TransportFormular;
use App\Notifications\RestaurantFormular;
use Notification;
use Exception;

class MessageController extends Controller
{
    public function index()
    {
        return view('cms.messages.list');
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

        $sqlRec = Message::query();


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
                '0' => $row->is_send ? '<i class="fa fa-check-square" aria-hidden="true"></i>' : '<i class="fa fa-spinner" aria-hidden="true"></i>',
                '1' => '<a href="'.url('cms/messages/'.$row->id.'/edit').'" class="action-edit">'.$row->name.'</a>',
                '2' => '<a href="'.url('cms/messages/'.$row->id.'/edit').'" class="action-edit"><i class="fa fa-envelope" aria-hidden="true"></i></a>',
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

    public function kontakt(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'tel' => ['required', 'string'],
            'email' => ['required', 'string', 'max:191'],
            'description' => ['required', 'string'],
            'date' => ['required', 'string', 'max:191'],
            'file' => ['nullable', 'array', 'max:4'],
            'file.*' => ['nullable', 'mimes:docx,pdf,jpeg,png,svg', 'file', 'max:7000']
        ]);   

        $files = [];
        if($request->hasFile('file')){
            foreach($request->file as $file){
                $files[] = Helper::saveFile($file, 'MessageFile', 'Joviac');
            }
        }

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'description' => $request->description,
            'date' => $request->date,
            'file' => $files,
        ]);

        return redirect()->back()->with(['status' => 'Vasa poruka je uspijesno poslana!']);
    }

    public function edit($id) 
    {
        return view('cms.messages.form', ['item' => Message::findOrFail($id)]);
    }

    public function formular(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'g-recaptcha-response' => ['required', function ($attribute, $value, $fail) {
                if (!app('captcha')->verifyResponse($value)) {
                    $fail('Invalid reCAPTCHA response.');
                }
            }],
            'last_name' => ['required', 'string', 'max:191'],
            'tel' => ['required', 'string'],
            'email' => ['required', 'string', 'max:191'],
            'transfer_date' => ['required', 'string', 'max:191'],
            'transfer_time' => ['required', 'string', 'max:191'],
            'flight_number' => ['required', 'string', 'max:191'],
            'adults' => ['required', 'string', 'max:191'],
            'children' => ['nullable', 'string', 'max:191'],
            'chair' => ['nullable', 'string', 'max:191'],
            'description' => ['nullable', 'string'],
        ]);   


        
        if ($request->check_first) {
            return redirect(url()->previous())->with(['spam' => 'SPAM!']);
        }
        $html = '<b>Ime:</b> '.htmlspecialchars($request->input('name')).'<br>';
        $html .= '<b>Prezime:</b> '.htmlspecialchars($request->input('last_name')).'<br>';
        $html .= '<b>Email:</b> '.htmlspecialchars($request->input('email')).'<br>';
        if($request->input('tel')!='') $html .= '<b>Telefon:</b> '.htmlspecialchars($request->input('tel')).'<br>';
        if($request->input('transfer_date')!='') $html .= '<b>Datum prevoza:</b> '.htmlspecialchars($request->input('transfer_date')).'<br>';
        if($request->input('transfer_time')!='') $html .= '<b>Vrijeme prevoza:</b> '.htmlspecialchars($request->input('transfer_time')).'<br>';
        if($request->input('flight_number')!='') $html .= '<b>Broj leta:</b> '.htmlspecialchars($request->input('flight_number')).'<br>';
        if($request->input('adults')!='') $html .= '<b>Odrasli:</b> '.htmlspecialchars($request->input('adults')).'<br>';
        if($request->input('children')!='') $html .= '<b>Djeca:</b> '.htmlspecialchars($request->input('children')).'<br>';
        if($request->input('chair')!='') $html .= '<b>Sjedalica:</b> '.htmlspecialchars($request->input('chair')).'<br>';
        if($request->input('description')!='') $html .= '<b>Napomena:</b> '.htmlspecialchars($request->input('description')).'<br>';

        try {
             Notification::route('mail', 'info@termaghotel.com')->notify(new TransportFormular($html, $request->input('email'), $request->input('name')));
        } catch (Exception $e) {}
        
        return redirect()->back()->with(['status' => 'Vasa poruka je uspijesno poslana!']);
    }

    public function formularRestaurant(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'g-recaptcha-response' => ['required', function ($attribute, $value, $fail) {
                if (!app('captcha')->verifyResponse($value)) {
                    $fail('Invalid reCAPTCHA response.');
                }
            }],
            'last_name' => ['required', 'string', 'max:191'],
            'tel' => ['required', 'string'],
            'email' => ['required', 'string', 'max:191'],
            'reservation_date' => ['required', 'string', 'max:191'],
            'reservation_time' => ['required', 'string', 'max:191'],
            'adults' => ['required', 'string', 'max:191'],
            'children' => ['nullable', 'string', 'max:191'],
            'chair' => ['nullable', 'string', 'max:191'],
            'description' => ['nullable', 'string'],
        ]);   


        
        if ($request->check_first) {
            return redirect(url()->previous())->with(['spam' => 'SPAM!']);
        }
        $html = '<b>Ime:</b> '.htmlspecialchars($request->input('name')).'<br>';
        $html .= '<b>Prezime:</b> '.htmlspecialchars($request->input('last_name')).'<br>';
        $html .= '<b>Email:</b> '.htmlspecialchars($request->input('email')).'<br>';
        if($request->input('tel')!='') $html .= '<b>Telefon:</b> '.htmlspecialchars($request->input('tel')).'<br>';
        if($request->input('reservation_date')!='') $html .= '<b>Datum rezervacije:</b> '.htmlspecialchars($request->input('transfer_date')).'<br>';
        if($request->input('reservation_time')!='') $html .= '<b>Vrijeme rezervacije:</b> '.htmlspecialchars($request->input('transfer_time')).'<br>';
        if($request->input('adults')!='') $html .= '<b>Odrasli:</b> '.htmlspecialchars($request->input('adults')).'<br>';
        if($request->input('children')!='') $html .= '<b>Djeca:</b> '.htmlspecialchars($request->input('children')).'<br>';
        if($request->input('chair')!='') $html .= '<b>Sjedalica:</b> '.htmlspecialchars($request->input('chair')).'<br>';
        if($request->input('description')!='') $html .= '<b>Napomena:</b> '.htmlspecialchars($request->input('description')).'<br>';

        try {
             Notification::route('mail', 'restoran@termaghotel.com')->notify(new RestaurantFormular($html, $request->input('email'), $request->input('name')));
        } catch (Exception $e) {}
        
        return redirect()->back()->with(['status' => 'Vasa poruka je uspijesno poslana!']);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;

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

        dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'last_name' => ['required', 'string', 'max:191'],
            'tel' => ['required', 'string'],
            'email' => ['required', 'string', 'max:191'],
            'transfer_date' => ['required', 'string', 'max:191'],
            'transfer_time' => ['required', 'string', 'max:191'],
            'flight_number' => ['required', 'string', 'max:191'],
            'adults' => ['required', 'string', 'max:191'],
            'children' => ['required', 'string', 'max:191'],
            'chair' => ['required', 'string', 'max:191'],
            'description' => ['required', 'string'],
        ]);   


        
        if ($request->check_first) {
            return redirect(url()->previous())->with(['spam' => 'SPAM!']);
        }
        $html = '<b>EINTAUSCH- ODER ANKAUFSANFRAGE:</b> '.htmlspecialchars($request->input('request')).'<br>';
        $html .= '<b>ERFASSEN SIE IHR FAHRZEUG:</b> '.htmlspecialchars($request->input('vehicle_option')).'<br>';
        if($request->input('marke')!='') $html .= '<b>Marke:</b> '.htmlspecialchars($request->input('marke')).'<br>';
        if($request->input('modell')!='') $html .= '<b>Modell:</b> '.htmlspecialchars($request->input('modell')).'<br>';
        if($request->input('transmission')!='') $html .= '<b>Getriebe:</b> '.htmlspecialchars($request->input('transmission')).'<br>';
        if($request->input('exterior_color')!='') $html .= '<b>Aussenfarbe:</b> '.htmlspecialchars($request->input('exterior_color')).'<br>';
        if($request->input('km_stand')!='') $html .= '<b>KM-Stand:</b> '.htmlspecialchars($request->input('km_stand')).'<br>';
        if($request->input('type_certificate')!='') $html .= '<b>Typenschein-Nr.:</b> '.htmlspecialchars($request->input('type_certificate')).'<br>';
        if($request->input('chassis')!='') $html .= '<b>Chassis-Nr.:</b> '.htmlspecialchars($request->input('chassis')).'<br>';
        if($request->input('first_registration')!='') $html .= '<b>Erstzulassung:</b> '.htmlspecialchars($request->input('first_registration')).'<br>';
        if($request->input('asking_price')!='') $html .= '<b>Preisvorstellung:</b> '.htmlspecialchars($request->input('asking_price')).'<br>';
        if($request->input('transmission2')!='') $html .= '<b>Getriebe:</b> '.htmlspecialchars($request->input('transmission2')).'<br>';
        if($request->input('km_stand2')!='') $html .= '<b>KM-Stand:</b> '.htmlspecialchars($request->input('km_stand2')).'<br>';
        if($request->input('equipment')) {
            $html .= '<b>Ausstattung:</b> ';
            foreach($request->input('equipment') as $equipment) {
                $html .= htmlspecialchars($equipment).',';
            }
            $html .= '<br><br>';
        }
        if($request->input('condition')) {
            $html .= '<b>Zustand:</b> ';
            foreach($request->input('condition') as $condition) {
                $html .= htmlspecialchars($condition).',';
            }
            $html .= '<br><br>';
        }
        $html .= '<b>Befindet sich das Fahrzeug in einem Leasing:</b> '.htmlspecialchars($request->input('leasing')).'<br>';
        if($request->input('remark')!='') $html .= '<b>Bemerkung:</b> '.htmlspecialchars($request->input('remark')).'<br>';
        if($request->input('message')!='') $html .= '<b>Nachricht:</b> '.htmlspecialchars($request->input('nachricht')).'<br>';
        $html .= '<b>Voranme:</b> '.htmlspecialchars($request->input('name')).'<br>';
        $html .= '<b>Telefon :</b> '.htmlspecialchars($request->input('tel')).'<br>';
        $html .= '<b>E-mail:</b> '.htmlspecialchars($request->input('email')).'<br>';
        if($request->input('firma')!='') $html .= '<b>Firma:</b> '.htmlspecialchars($request->input('firma')).'<br>';


        try {
             Notification::route('mail', $this->email)->notify(new Ankauf($html, $request->input('email'), $request->input('name'), $request->document, $request->image));
        } catch (Exception $e) {}

        if($request->copy) {
            try {
                Notification::route('mail', $request->input('email'))->notify(new UserAnkauf($html, $request->input('email'), $request->input('name'), $request->document, $request->image));
           } catch (Exception $e) {}
        }
        
        return redirect()->back()->with(['status' => 'Vasa poruka je uspijesno poslana!']);
    }
}

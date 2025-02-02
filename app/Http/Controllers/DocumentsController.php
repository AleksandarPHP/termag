<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use App\Helpers\Helper;
use Cache;
class DocumentsController extends Controller
{
    public function index()
    {
        return view('cms.documents.form', ['files' => Documents::all()]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'files' => ['required', 'mimes:pdf,docx', 'file', 'max:5000'],
        ], [
            'files.required' => 'Slika je obavezna.',
            'files.mimes' => 'Slika mora biti jpg ili png.',
            'files.file' => 'Datoteka mora biti slika.',
            'files.max' => 'Slika može biti maksimalno 5MB.'
        ]);    
        
        $file = $request->file('files');
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        
        $fileName = Helper::saveFile($file, 'Documents', $name);
        
        Documents::create([
            'file' => $fileName,
            'original_name' => $name,
        ]);

        Cache::forget(' ');

        return response()->json('Uspešno ste dodali dokument.', 200);
    }

    public function destroy($id)
    {
        $item = Documents::findOrFail($id);
        
        if(Helper::deleteFile($item->file)) {
            $item->delete();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('documents');

        session()->flash('success', 'Obrisano.');

        return back();
    }
}

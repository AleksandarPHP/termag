<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Helpers\Helper;
use Cache;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{

    public function index()
    {
        return view('cms.gallery.form', ['images' => Gallery::get()]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'files' => ['required', 'mimes:jpeg,png,webp', 'image', 'max:5000'],
        ], [
            'files.required' => 'Slika je obavezna.',
            'files.mimes' => 'Slika mora biti jpg ili png.',
            'files.image' => 'Datoteka mora biti slika.',
            'files.max' => 'Slika može biti maksimalno 5MB.'
        ]);    
        
        $image = $request->file('files');
        $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

        $name = 'gallery-'.$name;
        
        $galleryname = Helper::saveImage($image, 'gallery', $name);
        
        Gallery::create([
            'image' => $galleryname,
            'original_name' => $name,
        ]);

        Cache::forget('gallery');

        return response()->json('Uspešno ste dodali sliku.', 200);
    }

    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        
        if(Helper::deleteImage($item->image)) {
            $item->delete();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('gallery');

        session()->flash('success', 'Obrisano.');

        return back();
    }
}

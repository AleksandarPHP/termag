<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Cache;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }

    public function create()
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.album.form', ['item' => new Album(), 'editing' => false, 'lang' => $lang]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['required', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1']
        ]);

        $item = new Album;
        $item->setTranslation('title', $lang, $request->title);
        $item->is_active = $request->is_active ? 1 : 0;
        $item->save();

        Cache::forget( 'album');

        session()->flash('success', 'Dodato.');

        return redirect('cms/info');
    }

    public function edit(Request $request,$id)
    {
        $lang = $request->lang ?? 'sr';
        return view('cms.album.form', ['item' => Album::findOrFail($id), 'editing' => true, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $lang = $request->language ?? 'sr';

        $album = Album::findOrFail($id);
        $request->validate([
            'title' => ['required', 'string', 'max:191'],
            'is_active' => ['nullable', 'string', 'in:1']
        ]);

        $album->setTranslation('title', $lang, $request->input('title'));

        if ($lang == 'sr') {
            $album->is_active = $request->is_active ? 1 : 0;
        }
        $album->save();

        Cache::forget( 'album');

        session()->flash('success', 'Dodato.');

        return redirect('cms/info');
    }
}

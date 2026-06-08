<?php

namespace App\Http\Controllers;

use App\Models\SpecialOfferSlider;
use Illuminate\Http\Request;
use Cache;
use App\Helpers\Helper;

class SpecialOfferSliderController extends Controller
{
    public function index()
    {
        return view('cms.special-offers.list');
    }

    public function ajax(Request $request)
    {
        $data = [];

        $columns = [
            0 => 'id',
            1 => 'title',
            2 => 'priority',
        ];

        $sortable = [0, 1, 2];

        $sqlRec = SpecialOfferSlider::query();

        $search = $request['search']['value'];
        if (!empty($search) && !is_null($search) && is_string($search) && $search != '') {
            $sqlRec->where(function ($q) use ($search) {
                $q->whereRaw('(title like ?)', ["%$search%"]);
            });
        }

        $totalRecords = $sqlRec->count();

        $order = $request['order'];
        if (!empty($order) && !is_null($order) && is_array($order)) {
            foreach ($order as $value) {
                if (in_array($value['column'], $sortable) && ($value['dir'] == 'asc' || $value['dir'] == 'desc')) {
                    $sqlRec->orderBy($columns[$value['column']], $value['dir']);
                }
            }
        } else {
            $sqlRec->orderBy('priority', 'asc');
        }

        $length = (intval($request['length']) > 0) ? intval($request['length']) : 10;
        $start = intval($request['start']);
        $rows = $sqlRec->take($length)->skip($start)->get();

        foreach ($rows as $row) {
            $data[] = [
                '0' => $row->id,
                '1' => $row->title,
                '2' => $row->priority,
                '3' => '<a href="' . url('cms/special-offers/' . $row->id . '/edit') . '" class="action-edit"><i class="fa fa-edit"></i></a>',
                '4' => '<a href="' . url('cms/special-offers') . '" class="action-delete confirmation" data-id="' . $row->id . '"><i class="fa fa-trash"></i><form id="delete-form' . $row->id . '" action="' . url('cms/special-offers/' . $row->id) . '" method="POST" style="display: none;">' . csrf_field() . '<input type="hidden" name="_method" value="delete" /></form></a>',
            ];
        }

        $json_data = [
            'draw' => intval($request['draw']),
            'recordsTotal' => intval($totalRecords),
            'recordsFiltered' => intval($totalRecords),
            'data' => $data,
        ];

        return json_encode($json_data);
    }

    public function create(Request $request)
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.special-offers.form', ['item' => new SpecialOfferSlider, 'editing' => false, 'lang' => $lang]);
    }

    public function store(Request $request)
    {
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['required', 'string', 'max:191'],
            'subtitle' => ['nullable', 'string', 'max:191'],
            'link' => ['nullable', 'string'],
            'priority' => ['nullable', 'integer'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = Helper::saveImage($request->image, 'SpecialOfferSliders', $request->title);
        }

        $slider = new SpecialOfferSlider;
        $slider->setTranslation('title', $lang, $request->title);
        $slider->setTranslation('subtitle', $lang, $request->subtitle);
        $slider->link = $request->link;
        $slider->priority = $request->priority ?? 0;
        $slider->image = $image;
        $slider->is_active = $request->is_active ? 1 : 0;
        $slider->save();

        Cache::forget('special_offer_sliders');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/special-offers');
    }

    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? 'sr';

        return view('cms.special-offers.form', ['item' => SpecialOfferSlider::findOrFail($id), 'editing' => true, 'lang' => $lang]);
    }

    public function update(Request $request, $id)
    {
        $slider = SpecialOfferSlider::findOrFail($id);
        $lang = $request->language ?? 'sr';

        $request->validate([
            'title' => ['nullable', 'string', 'max:191'],
            'subtitle' => ['nullable', 'string', 'max:191'],
            'link' => ['nullable', 'string'],
            'priority' => ['nullable', 'integer'],
            'is_active' => ['nullable', 'string', 'in:1'],
            'image' => ['nullable', 'mimes:jpeg,png,svg,webp', 'image', 'max:5000'],
        ]);

        $image = $slider->image;
        if ($request->hasFile('image')) {
            $image = Helper::saveImage($request->image, 'SpecialOfferSliders', $slider->title, $image);
        }

        $slider->setTranslation('title', $lang, $request->title);
        $slider->setTranslation('subtitle', $lang, $request->subtitle);

        if ($lang == 'sr') {
            $slider->link = $request->link;
            $slider->priority = $request->priority ?? 0;
            $slider->image = $image;
            $slider->is_active = $request->is_active ? 1 : 0;
        }

        $slider->save();

        Cache::forget('special_offer_sliders');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/special-offers');
    }

    public function destroy($id)
    {
        $item = SpecialOfferSlider::findOrFail($id);

        Helper::deleteImage($item->image ?? null);
        $item->delete();

        Cache::forget('special_offer_sliders');

        session()->flash('success', 'Izmjenjeno.');

        return redirect('cms/special-offers');
    }

    public function removeImage($id)
    {
        $item = SpecialOfferSlider::findOrFail($id);
        $image = $item->image;
        if (Helper::deleteImage($image ?? null)) {
            $item->image = null;
            $item->save();
        } else {
            return back()->withErrors('Došlo je do greške.');
        }

        Cache::forget('special_offer_sliders');

        session()->flash('success', 'Izmjenjeno.');

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeSlider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WelcomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'slider_cover' => 'required|mimes:png,jpg,jpeg',
            'slider_title' => 'required|max:45',
        ], [
            'slider_cover.required' => 'Cover tidak boleh kosong',
            'slider_cover.mimes' => 'Cover tidak valid',
            'slider_title.required' => 'Judul tidak boleh kosong',
            'slider_title.max' => 'Judul terlalu panjang',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal menambahkan slider', 'Failed');
            return back()->withErrors($validated)->withInput();
        }

        $slider_cover = $request->file('slider_cover');
        $cover_name = $slider_cover->hashName();
        $slider_cover->storeAs('public/welcome/'.$cover_name);

        WelcomeSlider::create([
            'slider_cover' => $cover_name,
            'slider_title' => $request->slider_title
        ]);

        toastr()->success('Berhasil menambahkan slider', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(WelcomeSlider $welcomeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WelcomeSlider $welcomeSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'slider_cover' => 'mimes:png,jpg,jpeg',
            'slider_title' => 'required|max:45',
        ], [
            'slider_cover.mimes' => 'Cover tidak valid',
            'slider_title.required' => 'Judul tidak boleh kosong',
            'slider_title.max' => 'Judul terlalu panjang',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal mengubah slider', 'Failed');
            return back()->withErrors($validated)->withInput();
        }

        $slider = WelcomeSlider::findOrFail($id);
        $slider_cover = $request->file('slider_cover');
        if ($request->hasFile('slider_cover') && $slider_cover->isValid()) {
            $cover_name = $slider_cover->hashName();
            Storage::delete('public/welcome/'.$slider->slider_cover);
            $slider_cover->storeAs('public/welcome/'.$cover_name);
        } else {
            $cover_name = $slider->slider_cover;
        }

        $slider->update([
            'slider_cover' => $cover_name,
            'slider_title' => $request->slider_title
        ]);

        toastr()->success('Berhasil mengubah slider', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = WelcomeSlider::findOrFail($id);
        Storage::delete('public/welcome/'.$slider->slider_cover);
        $slider->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return back();
    }
}

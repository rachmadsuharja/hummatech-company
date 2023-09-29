<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'profile' => 'mimes:png,jpg,jpeg',
            'alumni_name' => 'required|min:3|max:100|unique:testimonials,alumni_name,'.$id,
            'school' => 'required|min:5|max:100',
            'words' => 'required|min:5|max:1000',
        ], [
            'profile.mimes' => 'Format foto tidak valid',
            'alumni_name.required' => 'Nama tidak boleh kosong',
            'alumni_name.min' => 'Nama terlalu pendek',
            'alumni_name.max' => 'Nama maksimal 100 karakter',
            'alumni_name.unique' => 'Alumni sudah masuk list',
            'words.required' => 'Kata testimoni tidak boleh kosong',
            'school.required' => 'Sekolah tidak boleh kosong',
            'school.min' => 'Nama sekolah terlalu pendek',
            'school.max' => 'Nama sekolah maksimal 100 karakter',
            'words.min' => 'Kata testimoni terlalu pendek',
            'words.max' => 'Kata testimoni maksimal 1000 karakter',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal mengubah testimoni', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $testimoni = Testimonial::findOrFail($id);
        $profile = $request->file('profile');
        if ($request->hasFile('profile')) {
            $profile_name = $profile->hashName();
            Storage::delete('public/student/'.$testimoni->profile);
            $profile->storeAs('public/student/'.$profile_name);
        } else {
            $profile_name = $testimoni->profile;
        }

        $testimoni->update([
            'profile' => $profile_name,
            'alumni_name' => $request->alumni_name,
            'school' => $request->school,
            'words' => $request->words,
        ]);
        toastr()->success('Berhasil mengubah testimoni', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testi = Testimonial::findOrFail($id);
        Storage::delete('public/student/'.$testi->profile);
        $testi->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return back();
    }
}

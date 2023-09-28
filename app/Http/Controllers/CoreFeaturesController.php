<?php

namespace App\Http\Controllers;

use App\Models\CoreFeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoreFeaturesController extends Controller
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
            'core_features' => 'required|max:255|unique:core_features,core_features',
        ], [
            'core_features.required' => 'Fitur tidak boleh kosong',
            'core_features.unique' => 'Fitur sudah terdaftar',
            'core_features.max' => 'Fitur terlalu panjang, maksimal 255 karakter',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal menambah data', 'Failed');
            return back();
        }
        CoreFeatures::create([
            'core_features' => $request->core_features,
        ]);

        toastr()->success('Berhasil menambahkan data', 'Success');
        return to_route('company-services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'core_features' => 'required|max:255|unique:core_features,core_features,'.$id,
        ], [
            'core_features.required' => 'Fitur tidak boleh kosong',
            'core_features.unique' => 'Fitur sudah terdaftar',
            'core_features.max' => 'Fitur terlalu panjang, maksimal 255 karakter',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal mengubah data', 'Failed');
            return back();
        }
        $core = CoreFeatures::findOrFail($id);
        $core->update([
            'core_features' => $request->core_features,
        ]);

        toastr()->success('Berhasil mengubah data', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $core = CoreFeatures::findOrFail($id);
        $core->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return back();
    }
}

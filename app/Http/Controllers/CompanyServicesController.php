<?php

namespace App\Http\Controllers;

use App\Models\CompanyServices;
use App\Models\CoreFeatures;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $services = CompanyServices::all();
        $core = CoreFeatures::all();
        return view('admin.company-services.index', compact('admin', 'services', 'core'));
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
        $validated = $this->validate($request, [
            'services_title' => 'required|max:50',
            'services_description' => 'required|max:255'
        ], [
            'services_title.required' => 'Judul tidak boleh kosong',
            'services_title.max' => 'Judul maksimal 50 karakter',
            'services_description.required' => 'Deskripsi tidak boleh kosong',
            'services_description.max' => 'Deskripsi maksimal 50 karakter'
        ]);
        $services = CompanyServices::findOrFail($id);
        $services->update($validated);

        toastr()->success('Berhasil mengubah data', 'Success');
        return to_route('company-services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = CompanyServices::findOrFail($id);
        $services->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return to_route('company-services.index');
    }
}

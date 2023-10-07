<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubsidiaryCompany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SubsidiaryCompanyController extends Controller
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
            'name' => 'required|max:50|unique:subsidiary_companies,name',
            'logo' => 'required|mimes:png,jpg,jpeg',
            'company_description' => 'required|max:1000'
        ], [
            'name.required' => 'Nama perusahaan tidak boleh kosong',
            'name.unique' => 'Perusahaan sudah terdaftar',
            'logo.required' => 'Logo tidak boleh kosong',
            'logo.mimes' => 'Format logo tidak valid',
            'name.max' => 'Nama perusahaan maksimal 50 karakter',
            'company_description.required' => 'Deskripsi tidak boleh kosong',
            'company_description.max' => 'Deskripsi maksimal 1000 karakter'
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal menambahkan Perusahaan', 'Failed');
            return to_route('company_profiles');
        }
        $logo = $request->file('logo');
        $logo_name = $logo->hashName();
        $logo->storeAs('public/subsidiary/'.$logo_name);

        SubsidiaryCompany::create([
            'name' => $request->name,
            'logo' => $logo_name,
            'company_description' => $request->company_description,
        ]);

        toastr()->success('Berhasil menambahkan Perusahaan', 'Success');
        return to_route('company-profiles');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubsidiaryCompany $subsidiaryCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubsidiaryCompany $subsidiaryCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sub = SubsidiaryCompany::findOrFail($id);
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:50|unique:subsidiary_companies,name,'.$sub->id,
            'logo' => 'mimes:png,jpg,jpeg',
            'company_description' => 'required|max:1000'
        ], [
            'name.required' => 'Nama perusahaan tidak boleh kosong',
            'name.max' => 'Nama perusahaan maksimal 50 karakter',
            'name.unique' => 'Perusahaan sudah terdaftar',
            'logo.required' => 'Logo tidak boleh kosong',
            'logo.mimes' => 'Format logo tidak valid',
            'company_description.required' => 'Deskripsi tidak boleh kosong',
            'company_description.max' => 'Deskripsi maksimal 1000 karakter'
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal mengubah Perusahaan', 'Failed');
            return to_route('company_profiles');
        }
        $logo = $request->file('logo');
        if ($request->hasFile('logo') && $logo->isValid()) {
            $logo_name = $logo->hashName();
            Storage::delete('public/subsidiary/'.$sub->logo);
            $logo->storeAs('public/subsidiary/'.$logo_name);
        } else {
            $logo_name = $sub->logo;
        }

        $sub->update([
            'name' => $request->name,
            'logo' => $logo_name,
            'company_description' => $request->company_description,
        ]);

        toastr()->success('Berhasil mengubah Perusahaan', 'Success');
        return to_route('company-profiles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = SubsidiaryCompany::findOrFail($id);
        Storage::delete('public/subsidiary/'.$company->logo);
        $company->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return to_route('company-profiles');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $company = CompanyProfile::first();
        return view('admin.company-profile.index', compact('admin', 'company'));
    }

    public function update(Request $request) {
        $validated = $this->validate($request, [
            'company_title' => 'required|max:50',
            'company_description' => 'required|max:1000',
            'company_cover' => 'nullable|mimes:png,jpg,jpeg'
        ], [
            'company_title.required' => 'Judul tidak boleh kosong',
            'company_title.max' => 'Judul maksimal 50 karakter',
            'company_description.required' => 'Deskripsi tidak boleh kosong',
            'company_description.max' => 'Deskripsi maksimal 1000 karakter',
            'company_cover.required' => 'Foto cover tidak boleh kosong',
            'company_cover.mimes' => 'Foto cover tidak valid',
        ]);

        $company = CompanyProfile::first();
        if ($request->hasFile('company_cover') && $request->file('company_cover')->isValid()) {
            Storage::delete($company->company_cover);
            $validated['company_cover'] = $request->file('company_cover')->store('company_cover');
        } else {
            $validated['company_cover'] = $company->company_cover;
        }

        $company->update([
            'company_title' => $validated['company_title'],
            'company_description' => $validated['company_description'],
            'company_cover' => $validated['company_cover'],
        ]);

        toastr()->success('Berhasil mengubah data', 'Success');
        return to_route('company-profiles');
    }
}

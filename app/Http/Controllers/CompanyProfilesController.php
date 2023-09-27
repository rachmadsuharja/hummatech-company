<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sosmed;
use App\Models\WorkMethod;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\OtherInfo;
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
        $sosmed = Sosmed::findOrFail(1);
        $company = CompanyProfile::findOrFail(1);
        $work = WorkMethod::findOrFail(1);
        $other = OtherInfo::findOrFail(1);
        return view('admin.company-profile.index', compact('admin', 'company', 'work', 'sosmed', 'other'));
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
        $cover = $request->file('company_cover');
        if ($request->hasFile('company_cover') && $cover->isValid()) {
            $cover_name = $cover->hashName();
            Storage::delete('public/company/'.$company->company_cover);
            $cover->storeAs('public/company/'.$cover_name);
            $validated['company_cover'] = $cover_name;
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

    public function workUpdate(Request $request) {
        $validated = $this->validate($request, [
            'work_title' => 'required|max:50',
            'work_description' => 'required|max:1000',
            'first_cover' => 'nullable|mimes:png,jpg,jpeg',
            'second_cover' => 'nullable|mimes:png,jpg,jpeg',
        ], [
            'work_title.required' => 'Judul tidak boleh kosong',
            'work_title.max' => 'Judul maksimal 50 karakter',
            'work_description.required' => 'Deskripsi tidak boleh kosong',
            'work_description.max' => 'Deskripsi maksimal 1000 karakter',
            'first_cover.mimes' => 'Foto cover tidak valid',
            'second_cover.mimes' => 'Foto cover tidak valid',
        ]);
        $work = WorkMethod::findOrFail(1);
        $first_cover = $request->file('first_cover');
        if ($request->hasFile('first_cover') && $first_cover->isValid()) {
            $cover_name = $first_cover->hashName();
            Storage::delete('public/company/work-method/'.$work->first_cover);
            $first_cover->storeAs('public/company/work-method/'.$cover_name);
            $validated['first_cover'] = $cover_name;
        } else {
            $validated['first_cover'] = $work->first_cover;
        }

        $second_cover = $request->file('second_cover');
        if ($request->hasFile('second_cover') && $second_cover->isValid()) {
            $cover_name = $second_cover->hashName();
            Storage::delete('public/company/work-method/'.$work->second_cover);
            $second_cover->storeAs('public/company/work-method/'.$cover_name);
            $validated['second_cover'] = $cover_name;
        } else {
            $validated['second_cover'] = $work->second_cover;
        }
        $work->update([
            'work_title' => $validated['work_title'],
            'work_description' => $validated['work_description'],
            'first_cover' => $validated['first_cover'],
            'second_cover' => $validated['second_cover'],
        ]);

        toastr()->success('Berhasil mengubah data', 'Success');
        return to_route('company-profiles');
    }

    public function sosmedUpdate(Request $request) {
        $validated = $this->validate($request, [
            'instagram' => 'nullable|url|max:500',
            'facebook' => 'nullable|url|max:500',
            'twitter' => 'nullable|url|max:500',
            'youtube' => 'nullable|url|max:500',
            'whatsapp' => 'nullable|min:11|max:14|regex:/^[0-9]+$/',
        ], [
            'instagram.url' => 'URL tidak valid',
            'facebook.url' => 'URL tidak valid',
            'twitter.url' => 'URL tidak valid',
            'youtube.url' => 'URL tidak valid',
            'instagram.max' => 'URL tidak valid',
            'facebook.max' => 'URL tidak valid',
            'twitter.max' => 'URL tidak valid',
            'youtube.max' => 'URL tidak valid',
            'whatsapp.min' => 'Nomer whatsapp tidak valid',
            'whatsapp.max' => 'Nomer whatsapp valid',
            'whatsapp.regex' => 'Nomor whatsapp tidak valid',
        ]);

        $sosmed = Sosmed::findOrFail(1);
        $sosmed->update([
            'instagram' => $validated['instagram'],
            'facebook' => $validated['facebook'],
            'twitter' => $validated['twitter'],
            'youtube' => $validated['youtube'],
            'whatsapp' => $validated['whatsapp'],
        ]);

        toastr()->success('Berhasil mengubah tautan', 'Success');
        return to_route('company-profiles');
    }

    public function otherInfoUpdate(Request $request) {
        $validated = $this->validate($request, [
            'email' => 'nullable|email',
            'start_working' => 'nullable',
            'finish_working' => 'nullable',
            'address' => 'nullable|min:5|max:1000',

        ], [
            'email.email' => 'Email tidak valid',
            'address.min' => 'Alamat terlalu pendek',
            'address.max' => 'Alamat maksimal 1000 karakter',
        ]);

        $other = OtherInfo::findOrFail(1);
        $other->update([
            'email' => $validated['email'],
            'start_working' => $validated['start_working'],
            'finish_working' => $validated['finish_working'],
            'address' => $validated['address'],
        ]);

        toastr()->success('Berhasil mengubah tautan', 'Success');
        return to_route('company-profiles');
    }
}

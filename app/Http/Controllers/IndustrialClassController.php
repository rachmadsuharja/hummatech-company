<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CoreFeatures;
use Illuminate\Http\Request;
use App\Models\IndustrialClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;

class IndustrialClassController extends Controller
{
    public function index(Request $request) {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $search = $request->input('search');
        $school = IndustrialClass::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('school_name', 'like', '%' . $search . '%');
            });
        })->paginate(8);
        $school->appends(['search' => $search]);
        $core = CoreFeatures::all();
        return view('admin.industrial-class.index', compact('admin', 'school','core'));
    }

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
            'school_logo' => 'required|mimes:png,jpg,jpeg',
            'school_name' => 'required|min:5|max:100|unique:industrial_classes,school_name',
            'join_date' => 'required|date',
            'school_address' => 'required|min:5|max:1000',
        ], [
            'school_logo.required' => 'Logo tidak boleh kosong',
            'school_logo.mimes' => 'Format foto tidak valid',
            'school_name.required' => 'Nama sekolah tidak boleh kosong',
            'school_name.min' => 'Nama sekolah terlalu pendek',
            'school_name.max' => 'Nama sekolah maksimal 100 karakter',
            'school_name.unique' => 'Sekolah sudah terdaftar',
            'school_address.required' => 'Alamat tidak boleh kosong',
            'school_date.required' => 'Tanggal bergabung tidak boleh kosong',
            'school_date.date' => 'Format tanggal tidak valid',
            'school_address.min' => 'Alamat terlalu pendek',
            'school_address.max' => 'Alamat maksimal 1000 karakter',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal menambahkan sekolah', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $school_logo = $request->file('school_logo');
        $logo_name = $school_logo->hashName();
        $school_logo->storeAs('public/school/'.$logo_name);

        IndustrialClass::create([
            'school_logo' => $logo_name,
            'school_name' => $request->school_name,
            'join_date' => $request->join_date,
            'school_address' => $request->school_address,
        ]);
        toastr()->success('Berhasil menambahkan sekolah', 'Success');
        return to_route('industrial-class.index');
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
            'school_logo' => 'mimes:png,jpg,jpeg',
            'school_name' => 'required|min:5|max:100|unique:industrial_classes,school_name,'.$id,
            'join_date' => 'required|date',
            'school_address' => 'required|min:5|max:1000',
        ], [
            'school_logo.mimes' => 'Format foto tidak valid',
            'school_name.required' => 'Nama sekolah tidak boleh kosong',
            'school_name.min' => 'Nama sekolah terlalu pendek',
            'school_name.max' => 'Nama sekolah maksimal 100 karakter',
            'school_name.unique' => 'Sekolah sudah terdaftar',
            'school_address.required' => 'Alamat tidak boleh kosong',
            'school_date.required' => 'Tanggal bergabung tidak boleh kosong',
            'school_date.date' => 'Format tanggal tidak valid',
            'school_address.min' => 'Alamat terlalu pendek',
            'school_address.max' => 'Alamat maksimal 1000 karakter',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal menambahkan sekolah', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $school = IndustrialClass::findOrFail($id);
        $school_logo = $request->file('school_logo');
        if ($request->hasFile('school_logo') && $school_logo->isValid()) {
            $logo_name = $school_logo->hashName();
            Storage::delete('public/school/'.$school->school_logo);
            $school_logo->storeAs('public/school/'.$logo_name);
        } else {
            $logo_name = $school->school_logo;
        }

        $school->update([
            'school_logo' => $logo_name,
            'school_name' => $request->school_name,
            'join_date' => $request->join_date,
            'school_address' => $request->school_address,
        ]);
        toastr()->success('Berhasil menambahkan sekolah', 'Success');
        return to_route('industrial-class.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school = IndustrialClass::findOrFail($id);
        Storage::delete('public/school/'.$school->school_logo);
        $school->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return back();
    }

    public function incoming() {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        return view('admin.industrial-class.incoming', compact('admin'));
    }
}

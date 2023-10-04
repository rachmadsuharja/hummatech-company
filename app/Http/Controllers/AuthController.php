<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        $sosmed = Sosmed::findOrFail(1);
        return view('auth.login', compact('sosmed'));
    }

    public function postlogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8|max:255'
        ], [
            'email.required' => 'Masukkan email terlebih dahulu',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter',
            'password.max' => 'Password tidak boleh lebih dari 255 karakter',
        ]);

        $credentials = $request->only('email', 'password');
        $userExists = User::where('email', $request->email)->exists();
        if ($userExists) {
            if (Auth::attempt($credentials)) {
                if (Auth::user()->role == 'admin') {
                    toastr()->success('Berhasil Login', 'Welcome Admin');
                    return to_route('dashboard');
                }
            } else {
                return to_route('login')->withErrors(['password' => 'Password salah'])->withInput()->with('alert-type','error');
            }
        }
        return to_route('login')->withErrors(['email' => 'Akun tidak terdaftar'])->withInput()->with('alert-type', 'error');
    }

    public function updateProfile(Request $request, string $id) {
        $validate = Validator::make($request->all(), [
            'profile' => 'mimes:png,jpg,jpeg',
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
        ], [
            'profile.mimes' => 'Foto profil tidak valid',
            'name.required' => 'Nama tidak boleh kosong',
            'name.min' => 'Nama terlalu pendek',
            'name.max' => 'Nama terlalu panjang',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah profile', 'Failed');
            return back();
        }


        $user = User::findOrFail($id);
        $profile = $request->file('profile');
        if ($request->hasFile('profile') && $profile->isValid()) {
            $profile_name = $profile->hashName();
            Storage::delete('public/user/profile/'.$user->profile);
            $profile->storeAs('public/user/profile/'.$profile_name);
        } else {
            $profile_name = $user->profile;
        }

        $user->update([
            'profile' => $profile_name,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        toastr()->success('Berhasil mengubah profil', 'Success');
        return back();
    }

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
}

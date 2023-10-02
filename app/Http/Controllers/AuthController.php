<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
}

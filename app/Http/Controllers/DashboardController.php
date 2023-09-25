<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        return view('admin.index', compact('admin'));
    }
}

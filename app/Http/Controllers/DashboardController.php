<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\User;
use App\Models\Inbox;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $inbox = Inbox::latest()->limit(5)->get();
        $product = Product::latest()->limit(5)->get();
        $counter = Counter::findOrFail(1);
        return view('admin.index', compact('admin','inbox','product','counter'));
    }
}

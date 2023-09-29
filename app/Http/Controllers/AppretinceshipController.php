<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppretinceshipController extends Controller
{
    public function index(Request $request) {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $search = $request->input('search');
        $testimonial = Testimonial::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('alumni_name', 'like', '%' . $search . '%');
            });
        })->paginate(6);
        $testimonial->appends(['search' => $search]);
        $counter = Counter::findOrFail(1);
        return view('admin.apprenticeship.index', compact('admin', 'testimonial', 'counter'));
    }

    public function incoming() {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        return view('admin.apprenticeship.incoming', compact('admin'));
    }

}

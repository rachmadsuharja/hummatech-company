<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Counter;
use App\Models\Testimonial;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprenticeshipController extends Controller
{
    public function index(Request $request) {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        $search = $request->input('search');
        $testimonial = Testimonial::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('alumni_name', 'like', '%' . $search . '%');
            });
        })->paginate(6);
        $testimonial->appends(['search' => $search]);
        $counter = Counter::findOrFail(1);
        return view('admin.apprenticeship.index', compact('admin', 'testimonial', 'counter', 'notification'));
    }

    public function incoming() {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        return view('admin.apprenticeship.incoming', compact('admin','notification'));
    }

}

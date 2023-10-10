<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Counter;
use App\Models\Testimonial;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ApprenticeTermsCondition;
use Illuminate\Support\Facades\Validator;

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
        $terms = ApprenticeTermsCondition::findOrFail(1);
        return view('admin.apprenticeship.index', compact('admin', 'testimonial', 'counter', 'notification','terms'));
    }

    public function updateTerms(Request $request, string $id) {
        $validate = Validator::make($request->all(), [
            'terms_and_conditions' => 'required|min:3|max:3000',
        ], [
            'terms_and_conditions.required' => 'Syarat & Ketentuan tidak boleh kosong',
            'terms_and_conditions.min' => 'Syarat & Ketentuan terlalu pendek',
            'terms_and_conditions.max' => 'Syarat & Ketentuan terlalu panjang',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah Syarat dan Ketentuan', 'Failed');
            return back();
        }

        $terms = ApprenticeTermsCondition::findOrFail($id);
        $terms->update([
            'terms_and_conditions' => $request->terms_and_conditions
        ]);

        toastr()->success('Berhasil mengubah syarat & ketentuan', 'Success');
        return back();
    }

    public function incoming() {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        return view('admin.apprenticeship.incoming', compact('admin','notification'));
    }

}

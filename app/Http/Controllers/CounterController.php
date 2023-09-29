<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CounterController extends Controller
{
    public function updateSchool(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'school' => 'required|numeric|gt:0',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah counter');
            return back();
        }
        $counter = Counter::findOrFail(1);
        $counter->update([
            'school' => $request->school,
        ]);

        toastr()->success('Berhasil mengubah counter');
        return back();
    }
    public function updateUniversity(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'university' => 'required|numeric|gt:0',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah counter');
            return back();
        }
        $counter = Counter::findOrFail(1);
        $counter->update([
            'university' => $request->university,
        ]);

        toastr()->success('Berhasil mengubah counter');
        return back();
    }
    public function updateAlumnus(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'alumnus' => 'required|numeric|gt:0',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah counter');
            return back();
        }
        $counter = Counter::findOrFail(1);
        $counter->update([
            'alumnus' => $request->alumnus,
        ]);

        toastr()->success('Berhasil mengubah counter');
        return back();
    }
    public function updateStudentQuota(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'student_quota' => 'required|numeric|gt:0',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah counter');
            return back();
        }
        $counter = Counter::findOrFail(1);
        $counter->update([
            'student_quota' => $request->student_quota,
        ]);

        toastr()->success('Berhasil mengubah counter');
        return back();
    }
    public function updateIndustrialClass(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'industrial_class' => 'required|numeric|gt:0',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah counter');
            return back();
        }
        $counter = Counter::findOrFail(1);
        $counter->update([
            'industrial_class' => $request->industrial_class,
        ]);

        toastr()->success('Berhasil mengubah counter');
        return back();
    }
    public function updateIndustrialClassQuota(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'industrial_class_quota' => 'required|numeric|gt:0',
        ]);
        if ($validate->fails()) {
            toastr()->error('Gagal mengubah counter');
            return back();
        }
        $counter = Counter::findOrFail(1);
        $counter->update([
            'industrial_class_quota' => $request->industrial_class_quota,
        ]);

        toastr()->success('Berhasil mengubah counter');
        return back();
    }
}

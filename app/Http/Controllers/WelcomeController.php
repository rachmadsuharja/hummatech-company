<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use App\Models\Sosmed;
use App\Models\Counter;
use App\Models\Product;
use App\Models\OtherInfo;
use App\Models\WorkMethod;
use App\Models\Testimonial;
use App\Models\CoreFeatures;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\CompanyServices;
use App\Models\IndustrialClass;
use App\Models\Notification;
use App\Models\WelcomeSlider;
use Illuminate\Support\Facades\Validator;

class WelcomeController extends Controller
{
    public function index() {
        $slider = WelcomeSlider::all();
        $company = CompanyProfile::findOrFail(1);
        $services = CompanyServices::all();
        $work = WorkMethod::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $other = OtherInfo::findOrFail(1);
        $school = IndustrialClass::all();
        $counter = Counter::findOrFail(1);
        return view('welcome', compact('slider','company', 'services', 'work', 'other', 'sosmed', 'school','counter'));
    }

    public function industrialClass() {
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $core = CoreFeatures::all();
        return view('industrial-class', compact('sosmed','other','core'));
    }

    public function apprenticeship() {
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $testimonial = Testimonial::all();
        return view('apprenticeship', compact('sosmed','other', 'testimonial'));
    }

    public function product() {
        $product = Product::all();
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        return view('products', compact('product', 'sosmed','other'));
    }

    public function blog() {
        $sosmed = Sosmed::findOrFail(1);
        $other = OtherInfo::findOrFail(1);

    }

    public function contact() {
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        return view('contact-us', compact('sosmed','other'));
    }

    public function send(Request $request) {
        $validated = Validator::make($request->all(), [
            'name' => 'required|min:3|max:100|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits_between:10,16|gt:0',
            'subject' => 'required|min:5|max:60',
            'message' => 'required|min:10|max:1500',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.min' => 'Nama terlalu pendek',
            'name.max' => 'Nama terlalu panjang',
            'name.regex' => 'Nama tidak valid',
            'phone.required' => 'No telpon tidak boleh kosong',
            'phone.numeric' => 'No telpon tidak valid',
            'phone.digits_between' => 'No telpon tidak valid',
            'phone.gt' => 'No telpon tidak valid',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.max' => 'Email tidak valid',
            'subject.required' => 'Nama tidak boleh kosong',
            'subject.min' => 'Judul terlalu pendek',
            'subject.max' => 'Judul terlalu panjang',
            'message.required' => 'Nama tidak boleh kosong',
            'message.min' => 'Pesan terlalu pendek',
            'message.max' => 'Pesan terlalu panjang',
        ]);

        if ($validated->fails()) {
            toastr()->error('Gagal mengirim pesan', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        Inbox::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        Notification::create([
            'title' => $request->name,
            'sub_title' => $request->subject,
            'category' => 'inbox',
        ]);
        toastr()->success('Berhasil mengirim pesan', 'Success');
        return back();
    }
}

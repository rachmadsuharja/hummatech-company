<?php

namespace App\Http\Controllers;

use App\Models\CategoryNewsPivot;
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
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Notification;
use App\Models\SubsidiaryCompany;
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
        $categories = NewsCategory::all();
        $news = News::latest()->limit(3)->get();
        $subsidiary = SubsidiaryCompany::all();
        return view('welcome', compact('slider','company', 'services', 'work', 'other', 'sosmed', 'school','counter', 'categories','news','subsidiary'));
    }

    public function industrialClass() {
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $core = CoreFeatures::all();
        $categories = NewsCategory::all();
        return view('industrial-class', compact('sosmed','other','core','categories'));
    }

    public function apprenticeship() {
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $testimonial = Testimonial::all();
        $categories = NewsCategory::all();
        $counter = Counter::findOrFail(1);
        return view('apprenticeship', compact('sosmed','other', 'testimonial','categories','counter'));
    }

    public function product() {
        $product = Product::all();
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $categories = NewsCategory::all();
        return view('products', compact('product', 'sosmed','other','categories'));
    }

    public function productDetails(string $slug) {
        $product = Product::where('slug', $slug)->first();
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $categories = NewsCategory::all();
        return view('product-details', compact('product','other','sosmed','categories'));
    }

    public function blog(Request $request, string $slug) {
        $sosmed = Sosmed::findOrFail(1);
        $categories = NewsCategory::all();
        $other = OtherInfo::findOrFail(1);
        $category = NewsCategory::where('slug', $slug)->first();
        $search = $request->input('search');
        $news = CategoryNewsPivot::where('category_id', $category->id)
        ->when(request()->has('search'), function ($query) use ($request) {
            $search = request('search');
            $query->whereHas('news', function($subquery) use ($request) {
                $search = request('search');
                $subquery->where('subject', 'like', '%' . $search . '%');
            });
        })->paginate(5);
        $news->appends(['search' => $search]);
        return view('blog', compact('sosmed','categories','other','category', 'news'));
    }

    public function contact() {
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $categories = NewsCategory::all();
        return view('contact-us', compact('sosmed','other','categories'));
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

    public function details(string $slug) {
        $categories = NewsCategory::all();
        $news = News::where('slug', $slug)->first();
        $articles = News::latest()->limit(4)->get();
        $other = OtherInfo::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        return view('article-details', compact('news','sosmed','other','categories','articles'));
    }
}

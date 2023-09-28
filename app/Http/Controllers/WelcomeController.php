<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use App\Models\Product;
use App\Models\OtherInfo;
use App\Models\WorkMethod;
use App\Models\CoreFeatures;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\CompanyServices;
use App\Models\IndustrialClass;

class WelcomeController extends Controller
{
    public function index() {
        $company = CompanyProfile::findOrFail(1);
        $services = CompanyServices::all();
        $work = WorkMethod::findOrFail(1);
        $sosmed = Sosmed::findOrFail(1);
        $other = OtherInfo::findOrFail(1);
        $school = IndustrialClass::all();
        return view('welcome', compact('company', 'services', 'work', 'other', 'sosmed', 'school'));
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
        return view('apprenticeship', compact('sosmed','other'));
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
}

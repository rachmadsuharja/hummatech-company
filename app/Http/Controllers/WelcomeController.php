<?php

namespace App\Http\Controllers;

use App\Models\IndustrialClass;
use App\Models\Sosmed;
use App\Models\OtherInfo;
use App\Models\WorkMethod;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\CompanyServices;

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
}

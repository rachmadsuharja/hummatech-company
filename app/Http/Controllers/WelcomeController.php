<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\CompanyServices;
use App\Models\WorkMethod;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $company = CompanyProfile::findOrFail(1);
        $services = CompanyServices::all();
        $work = WorkMethod::findOrFail(1);
        return view('welcome', compact('company', 'services', 'work'));
    }
}

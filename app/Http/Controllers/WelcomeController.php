<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $company = CompanyProfile::first();
        return view('welcome', compact('company'));
    }
}

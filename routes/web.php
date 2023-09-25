<?php

use App\Http\Controllers\AppretinceshipController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyProfilesController;
use App\Http\Controllers\CompanyServicesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndustrialClassController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::middleware('guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
});

// Admin Routes
Route::middleware('admin')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('incoming-appretinceship', [AppretinceshipController::class, 'incoming'])->name('incoming-appretinceship');
    Route::get('incoming-industrial-class', [IndustrialClassController::class, 'incoming'])->name('incoming-industrial-class');
    Route::get('apprenticeship', [AppretinceshipController::class, 'index'])->name('appretinceship');
    Route::get('industrial-class', [IndustrialClassController::class, 'index'])->name('industrial-class');
    Route::resource('news', NewsController::class);
    Route::resource('products', ProductsController::class);
    Route::get('inbox', [ContactsController::class, 'index'])->name('inbox');
    Route::get('company-profiles', [CompanyProfilesController::class, 'index'])->name('company-profiles');
    Route::put('company-profiles', [CompanyProfilesController::class, 'update'])->name('company-profiles.update');
    Route::get('company-services', [CompanyServicesController::class, 'index'])->name('company-services');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

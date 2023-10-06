<?php

use App\Http\Controllers\ApprenticeshipController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyProfilesController;
use App\Http\Controllers\CompanyServicesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CoreFeaturesController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndustrialClassController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WelcomeSliderController;

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
Route::get('kelas-industri', [WelcomeController::class, 'industrialClass'])->name('kelas-industri');
Route::get('pkl', [WelcomeController::class, 'apprenticeship'])->name('pkl');
// Route::get('blog', [WelcomeController::class, 'blog'])->name('blog');
Route::get('blog/categories/{slug}', [WelcomeController::class, 'blog'])->name('blog');
Route::get('produk', [WelcomeController::class, 'product'])->name('produk');
Route::get('kontak', [WelcomeController::class, 'contact'])->name('kontak');
Route::post('kontak/send', [WelcomeController::class, 'send'])->name('inbox.send');

Route::middleware('guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
});

// Admin Routes
Route::middleware('admin')->group(function() {
    Route::get('redirect/{id}', [DashboardController::class, 'redirect'])->name('redirecto');
    Route::delete('read-inbox', [DashboardController::class, 'readAllInbox'])->name('read-inbox');
    Route::put('profile/{id}', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('incoming-apprenticeship', [ApprenticeshipController::class, 'incoming'])->name('incoming-apprenticeship');
    Route::get('incoming-industrial-class', [IndustrialClassController::class, 'incoming'])->name('incoming-industrial-class');
    Route::get('apprenticeship', [ApprenticeshipController::class, 'index'])->name('apprenticeship');
    Route::resource('industrial-class', IndustrialClassController::class);
    Route::resource('news', NewsController::class)->parameters(['news' => 'slug']);
    Route::resource('news-categories', NewsCategoryController::class);
    Route::resource('products', ProductsController::class);
    Route::get('inbox', [ContactsController::class, 'index'])->name('inbox');
    Route::put('reply/{id}', [ContactsController::class, 'reply'])->name('reply');
    Route::get('company-profiles', [CompanyProfilesController::class, 'index'])->name('company-profiles');
    Route::put('company-profiles', [CompanyProfilesController::class, 'update'])->name('company-profiles.update');
    Route::put('company-profiles/work-method', [CompanyProfilesController::class, 'workUpdate'])->name('work.update');
    Route::put('company-profiles/sosmed', [CompanyProfilesController::class, 'sosmedUpdate'])->name('sosmed.update');
    Route::put('company-profiles/other-info', [CompanyProfilesController::class, 'otherInfoUpdate'])->name('other-info.update');
    Route::resource('welcome-slider', WelcomeSliderController::class);
    Route::resource('company-services', CompanyServicesController::class);
    Route::resource('core-features', CoreFeaturesController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::put('counters/school', [CounterController::class, 'updateSchool'])->name('counters.school');
    Route::put('counters/univ', [CounterController::class, 'updateUniversity'])->name('counters.univ');
    Route::put('counters/alumnus', [CounterController::class, 'updateAlumnus'])->name('counters.alumnus');
    Route::put('counters/student-quota', [CounterController::class, 'updateStudentQuota'])->name('counters.student-quota');
    Route::put('counters/industrial-class', [CounterController::class, 'updateIndustrialClass'])->name('counters.industrial-class');
    Route::put('counters/industrial-class-quota', [CounterController::class, 'updateIndustrialClassQuota'])->name('counters.industrial-class-quota');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

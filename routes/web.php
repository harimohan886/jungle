<?php

use App\Http\Controllers\front\about\AboutPageController;
use App\Http\Controllers\front\cancel\CancellationPolicyController;
use App\Http\Controllers\front\contact\ContactPageController;
use App\Http\Controllers\front\destination\DestinationController;
use App\Http\Controllers\Front\FooterPage\FooterPageManagementController;
use App\Http\Controllers\Front\gallery\GalleryPageController;
use App\Http\Controllers\front\holidaypackage\HolidayPackagesController;
use App\Http\Controllers\front\job\JobsController;
use App\Http\Controllers\front\packagedetail\PackageDetailController;
use App\Http\Controllers\front\paynow\PayNowController;
use App\Http\Controllers\front\privacy\PrivacyPolicyController;
use App\Http\Controllers\front\safari\GirSafariPageController;
use App\Http\Controllers\front\safari\jimcorbettSafariPageController;
use App\Http\Controllers\front\safari\KazirangasafariPageController;
use App\Http\Controllers\front\safari\RanthamboresafariPageController;
use App\Http\Controllers\front\safari\TadobasafariPageController;
use App\Http\Controllers\front\term\TermConditionController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
Route::get('/', [FooterPageManagementController::class, 'index'])->name('home');
Route::get('destination', [DestinationController::class, 'index'])->name('destination');
Route::get('paynow', [PayNowController::class, 'index'])->name('paynow');
Route::get('holidaypackage', [HolidayPackagesController::class, 'index'])->name('package');
Route::get('peckagedetail', [PackageDetailController::class, 'index'])->name('packagedetail');
Route::get('girsafari', [GirSafariPageController::class, 'index'])->name('girsafaripage');
Route::get('jimcorbettsafari', [jimcorbettSafariPageController::class, 'index'])->name('jimcorbettsafaripage');
Route::get('kazirangasafari', [KazirangasafariPageController::class, 'index'])->name('kazirangasafaripage');
Route::get('ranthanboresafari', [RanthamboresafariPageController::class, 'index'])->name('ranthanboresafaripage');
Route::get('tadobasafari', [TadobasafariPageController::class, 'index'])->name('tadobasafaripage');
Route::get('about', [AboutPageController::class, 'index'])->name('about');
Route::get('contact', [ContactPageController::class, 'index'])->name('contact');
Route::get('privacy', [PrivacyPolicyController::class, 'index'])->name('privacypolicy');
Route::get('termsandcondition', [TermConditionController::class, 'index'])->name('termsandcondition');
Route::get('cancel', [CancellationPolicyController::class, 'index'])->name('cancellationpolicy');
Route::get('career', [JobsController::class, 'index'])->name('career');
Route::get('gallery', [GalleryPageController::class, 'index'])->name('gallery');
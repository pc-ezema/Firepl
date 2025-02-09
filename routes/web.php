<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/about-us', [HomePageController::class, 'about'])->name('about');
Route::get('/contact-us', [HomePageController::class, 'contact'])->name('contact');
Route::post('/contact', [HomePageController::class, 'ContactUsForm'])->name('contact.store')->middleware(ProtectAgainstSpam::class);
Route::get('/faqs', [HomePageController::class, 'faqs'])->name('faqs');
Route::get('/service/construction-project-management', [HomePageController::class, 'services'])->name('services');
Route::get('/service/facility-management', [HomePageController::class, 'services'])->name('services');
Route::get('/service/event-management', [HomePageController::class, 'services'])->name('services');
Route::get('/service/engineering-project-management', [HomePageController::class, 'services'])->name('services');
Route::get('/service/property-due-diligence', [HomePageController::class, 'services'])->name('services');
Route::get('/service/project-monitoring', [HomePageController::class, 'services'])->name('services');
Route::get('/service/documentation-services', [HomePageController::class, 'services'])->name('services');
Route::get('/service/information-technology', [HomePageController::class, 'services'])->name('services');

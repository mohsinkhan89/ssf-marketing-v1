<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
Route::get('/seo', [FrontendController::class, 'seo'])->name('seo');
Route::get('/ppc', [FrontendController::class, 'ppc'])->name('ppc');
Route::get('/social-media', [FrontendController::class, 'socialMedia'])->name('social-media');
Route::get('/email-marketing', [FrontendController::class, 'emailMarketing'])->name('email-marketing');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/dashboard', [FrontendController::class, 'dashboard'])->middleware('auth')->name('dashboard');
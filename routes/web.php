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
Route::post('/contact-us', [FrontendController::class, 'storeContactRequest'])->name('contact-us.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/{page}', [FrontendController::class, 'dashboard'])->name('dashboard.page');
    Route::put('/dashboard/profile', [FrontendController::class, 'updateProfile'])->name('dashboard.profile.update');
    Route::post('/dashboard/users', [FrontendController::class, 'storeUser'])->name('dashboard.users.store');
    Route::put('/dashboard/users/{user}', [FrontendController::class, 'updateUser'])->name('dashboard.users.update');
    Route::delete('/dashboard/users/{user}', [FrontendController::class, 'destroyUser'])->name('dashboard.users.destroy');
    Route::post('/dashboard/campaigns', [FrontendController::class, 'storeCampaign'])->name('dashboard.campaigns.store');
    Route::put('/dashboard/campaigns/{campaign}', [FrontendController::class, 'updateCampaign'])->name('dashboard.campaigns.update');
    Route::delete('/dashboard/campaigns/{campaign}', [FrontendController::class, 'destroyCampaign'])->name('dashboard.campaigns.destroy');
    Route::post('/dashboard/reviews', [FrontendController::class, 'storeReview'])->name('dashboard.reviews.store');
    Route::put('/dashboard/reviews/{review}', [FrontendController::class, 'updateReview'])->name('dashboard.reviews.update');
    Route::delete('/dashboard/reviews/{review}', [FrontendController::class, 'destroyReview'])->name('dashboard.reviews.destroy');
    Route::post('/dashboard/brands', [FrontendController::class, 'storeTrustedBrand'])->name('dashboard.brands.store');
    Route::put('/dashboard/brands/{trustedBrand}', [FrontendController::class, 'updateTrustedBrand'])->name('dashboard.brands.update');
    Route::delete('/dashboard/brands/{trustedBrand}', [FrontendController::class, 'destroyTrustedBrand'])->name('dashboard.brands.destroy');
    Route::delete('/dashboard/contact-requests/{contactRequest}', [FrontendController::class, 'destroyContactRequest'])->name('dashboard.contact-requests.destroy');
    Route::post('/dashboard/social-links', [FrontendController::class, 'storeSocialLink'])->name('dashboard.social-links.store');
    Route::put('/dashboard/social-links/{socialLink}', [FrontendController::class, 'updateSocialLink'])->name('dashboard.social-links.update');
    Route::delete('/dashboard/social-links/{socialLink}', [FrontendController::class, 'destroySocialLink'])->name('dashboard.social-links.destroy');
    Route::post('/dashboard/settings', [FrontendController::class, 'updateSettings'])->name('dashboard.settings.update');
    Route::post('/dashboard/settings/field/{field}', [FrontendController::class, 'updateSettingField'])->name('dashboard.settings.field.update');
    Route::delete('/dashboard/settings/field/{field}', [FrontendController::class, 'clearSettingField'])->name('dashboard.settings.field.clear');
    Route::post('/dashboard/settings/logo/{type}', [FrontendController::class, 'updateSettingLogo'])->name('dashboard.settings.logo.update');
    Route::delete('/dashboard/settings/logo/{type}', [FrontendController::class, 'clearSettingLogo'])->name('dashboard.settings.logo.clear');
});




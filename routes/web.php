<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('terms-and-conditions', [PageController::class, 'termsCondition'])->name('terms-condition');
Route::get('privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('los-angeles-privacy-rights', [PageController::class, 'losAngelesPrivacyRights'])->name('los-angeles-privacy-rights');
Route::post('store-inquiry', [PageController::class, 'storeInquiry'])->name('store-inquiry');
Route::get('thank-you', [PageController::class, 'thankYou'])->name('thank-you');




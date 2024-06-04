<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('about-us', [IndexController::class, 'aboutUs'])->name('about-us');
Route::get('employees', [IndexController::class, 'employees'])->name('employees');
Route::get('services', [IndexController::class, 'services'])->name('services');
Route::get('pricing', [IndexController::class, 'pricing'])->name('pricing');
Route::get('contact', [IndexController::class, 'contact'])->name('contact');
Route::get('faq', [IndexController::class, 'faq'])->name('faq');
Route::get('privacy-statement', [IndexController::class, 'privacyStatement'])->name('privacy-statement');
Route::get('terms', [IndexController::class, 'terms'])->name('terms');

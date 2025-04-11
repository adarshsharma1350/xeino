<?php

use App\Http\Controllers\Auth\LocationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\FAQController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name('home');


Route::get('/', function () {
    return view('user.dashboard');
})->name('dashboard');



Route::get('/about', function () {
    return view('user.about');
})->name('about');


Route::get('faq',[FAQController::class,'show'])->name('faq.show');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::get('/location', [LocationController::class, 'show'])->name('location');

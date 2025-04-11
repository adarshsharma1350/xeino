<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.save');

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.save');

    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.login');

});

Route::middleware('auth')->post('/logout', [LogoutController::class, 'logout'])->name('logout');

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // echo "get lost";
// })->name('frontpage');


Route::get('/maps', function () {
    return view('maps.maps-google');
})->name('maps.google');


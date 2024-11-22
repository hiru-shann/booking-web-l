<?php

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

Route::get('/', function () {
    return view('pages.frontend.index');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/hotels', function () {
    return view('pages.frontend.hotels');
});

Route::get('/resturents', function () {
    return view('pages.frontend.resturents');
});

Route::get('/hotel', function () {
    return view('pages.frontend.hotel');
});

Route::get('/profile', function () {
    return view('pages.frontend.profile');
});



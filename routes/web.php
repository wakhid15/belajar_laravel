<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/main');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});


Route::get('/about', function () {
    return view('about', [
        "nama" => "Mokhamad Wakhid Mauludien",
        "email" => "mokhamadwakhidmauludien@gmail.com",
        "gambar" => "ludien.jpg",
    ]);
});


Route::get('/blog', function () {
    return view('blog');
});
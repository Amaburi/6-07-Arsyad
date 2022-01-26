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

Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
        "nama" => "02",
        "email" => "cryptoniac@gmail.com",
        "image" => "902676.png"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "02",
        "email" => "cryptoniac@gmail.com",
        "image" => "902676.png"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

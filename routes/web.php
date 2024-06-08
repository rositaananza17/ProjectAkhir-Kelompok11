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
    return view('auth.login');
});
Route::get('index', function () {
    return view('layout.master');
});
Route::get('about', function () {
    return view('layout.about');
});
Route::get('gallery', function () {
    return view('layout.gallery ');
});
Route::get('contact', function () {
    return view('layout.contact');
});

Auth::routes();






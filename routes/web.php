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
    return view('index');
});
Route::get('/b', function () {
    return view('blog');
});
Route::get('/bd', function () {
    return view('blog_detail');
});
Route::get('/p', function () {
    return view('portfolio');
});
Route::get('/s', function () {
    return view('service_detail');
});
Route::get('/t', function () {
    return view('team');
});
Route::get('/a', function () {
    return view('about');
});

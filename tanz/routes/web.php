<?php

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
    return view('welcome');
});

Route::get('/intro', function () {
    return view('intro');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/disclaimer', function () {
    return view('terms');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('register/confirm/{token}', 'Auth\RegisterController@confirmEmail');

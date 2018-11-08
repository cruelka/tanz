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
    
    return view('intro');
})->middleware('guest');

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

Route::get('/application', function () {
    return view('application');
});

Route::get('/test','HomeController@test');
Route::post('/test','HomeController@test');

Route::get('register/confirm/{token}', 'Auth\RegisterController@confirmEmail');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/template', function () {
    return view('template');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testhtml', function () {
    return view('form');
});

Route::get('/applications', function () {
    return view('applications');
});


Route::group([ 'middleware'=>'auth'], function() {
    Route::get('/apply', function () {
        return view('apply');
    });

    Route::get('/apply2', function () {
        return view('apply2');
    });
    Route::post('/apply','ApplicationController@store');

});
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\User;
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::loginUsingId(1);

//Route::get('/home', 'HomeController@index')->middleware('auth');

//Route::get('/login', function () {
//    return view('auth.login');
//});

Route::get('/login', 'LoginController@showLoginForm');

//Route::post('/login', 'LoginController@Login');

//Route::get('/register', function () {
//    return view('auth.register');
//});

//$this->app->bind(
//    \App\ManualAuth\Guard::class, \App\ManualAuth\ParameterGuard::class
//);

$this->app->bind(
    \App\ManualAuth\Guard::class, \App\ManualAuth\CookieGuard::class
);




Route::group(['middleware' => 'manualauth'], function () {
    Route::get('/tasques', function () {

        return view('tasques');
    });
});



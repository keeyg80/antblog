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
    return view('Pages.welcome2');
});

Route::get('/landing', function () {
    return view('Pages.landing');
});

Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/index', function () {
    return view('Pages.index');
});


Route::get('/login', function () {
    return view('Pages.login');
});

Route::get('/test2', function () {
    return view('Pages.test2');
});



Route::get('/user', 'UserController@index');
Route::get('/home', 'UserController@home');
Route::get('/test', 'UserController@test');
//Route::get('/index', 'UserController@index');
Route::get('/services', 'UserController@services');
//Route::get('/landing', 'UserController@landing');

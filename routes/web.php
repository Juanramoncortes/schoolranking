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

Route::get('/universidad', function () {
    return view('universidad');
});
Route::get('/facultades', function () {
    return view('facultades');
});
Route::get('/facultad', function () {
    return view('facultad');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile', 'ProfileController');
Route::resource('universidad', 'UniversidadController');
Route::resource('facultad', 'FacultadController');



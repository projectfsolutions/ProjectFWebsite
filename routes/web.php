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
    return view('HomePage');
});

Route::get('/HomePage', function () {
    return view('HomePage');
});

Route::get('/About', function () {
    return view('About');
});

Auth::routes();
Route::get('/AdminMain', 'HomeController@index')->name('AdminMain');
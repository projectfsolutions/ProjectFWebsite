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

Route::get('/Admin', function () {
    return view('HomePage');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/ContactUs', function () {
    return view('ContactUs');
});

Route::get('/Clients', function () {
    return view('Clients');
});

Route::get('/Greetings', function () {
    return view('Greetings');
});

Route::get('/Portfolio', function () {
    return view('Portfolio');
});

Route::get('/OneTACS', function () {
    return view('OneTACS');
});

Route::get('/ParkingPOS', function () {
    return view('ParkingPOS');
});

Route::get('/ToyotaSurvey', function () {
    return view('ToyotaSurvey');
});

Route::get('/RMS', function () {
    return view('RMS');
});

Route::get('/CMS', function () {
    return view('CMS');
});

Route::get('/RAMS', function () {
    return view('RAMS');
});

Route::get('/VMS', function () {
    return view('VMS');
});


Route::post('sendMail','MailController@store');

Auth::routes();
Route::get('/AdminMain', 'HomeController@index')->name('AdminMain');

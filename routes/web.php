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

// Admin CMS Routes


Route::get('/AdminWWD', function () {
    return view('CMS.AdminWWD');
});

Route::get('/AdminTechnology', function () {
    return view('CMS.AdminTechnology');
});

Route::get('/AdminTeam', function () {
    return view('CMS.AdminTeam');
});

Route::get('/AdminPortfolio', function () {
    return view('CMS.AdminPortfolio');
});

Route::get('/AdminClients', function () {
    return view('CMS.AdminClients');
});

Route::resource('/AdminAbout','CMS\ctrlTblAbout');

//HomeWebsite Routes
Route::get('/','HomeWebsite\ctrlHomePage@index');
Route::get('/HomePage','HomeWebsite\ctrlHomePage@index');
Route::get('/Admin','HomeWebsite\ctrlHomePage@index');

Auth::routes();
//CMS Routes
Route::get('/AdminMain', 'CMS\ctrlTblMainSlider@index');
Route::post('/AdminMainStore', 'CMS\ctrlTblMainSlider@store');
Route::post('/AdminMainUpdate', 'CMS\ctrlTblMainSlider@update');
Route::post('/AdminMainDestroy', 'CMS\ctrlTblMainSlider@destroy');

Route::get('/AdminServices','CMS\ctrlTblServices@index');
Route::post('/AdminServicesStore','CMS\ctrlTblServices@store');
Route::post('/AdminServicesUpdate','CMS\ctrlTblServices@update');
Route::post('/AdminServicesDestroy','CMS\ctrlTblServices@destroy');





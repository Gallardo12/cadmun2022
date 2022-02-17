<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactUsFormController;

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

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/ga', function () {
    return view('committees.ga');
});

Route::get('/registration', function () {
    return view('committees.registration');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/sc', function () {
    return view('committees.sc');
});

Route::get('/who', function () {
    return view('committees.who');
});

Route::get('/cmd', function () {
    return view('committees.cmd');
});

Route::get('/ccpcj', function () {
    return view('committees.ccpcj');
});

Route::get('/hr', function () {
    return view('committees.hr');
});

Route::get('/au', function () {
    return view('committees.au');
});

Route::get('/specpol', function () {
    return view('committees.specpol');
});

Route::get('/csw', function () {
    return view('committees.csw');
});

Route::get('/sochum', function () {
    return view('committees.sochum');
});

Route::get('/ad', function () {
    return view('committees.ad');
});

Route::get('/iom', function () {
    return view('committees.iom');
});

Route::get('/habitat', function () {
    return view('committees.habitat');
});

Route::get('/psd', function () {
    return view('committees.psd');
});


Route::post('/', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
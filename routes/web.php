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
    return view('ga');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/sc', function () {
    return view('sc');
});

Route::get('/who', function () {
    return view('who');
});

Route::get('/cmd', function () {
    return view('cmd');
});

Route::get('/ccpcj', function () {
    return view('ccpcj');
});

Route::get('/hr', function () {
    return view('hr');
});

Route::get('/au', function () {
    return view('au');
});

Route::get('/specpol', function () {
    return view('specpol');
});

Route::get('/csw', function () {
    return view('csw');
});

Route::get('/sochum', function () {
    return view('sochum');
});

Route::get('/ad', function () {
    return view('ad');
});

Route::get('/iom', function () {
    return view('iom');
});

Route::get('/habitat', function () {
    return view('habitat');
});


Route::post('/', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
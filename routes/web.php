<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
Route::get('/', 'HomeController@index');
Route::get('/profil', 'HomeController@profil');
Route::get('/legalitas', 'HomeController@legalitas');
Route::get('/Layanan', 'HomeController@Layanan');
Route::get('/pelanggan', 'HomeController@pelanggan');
Route::get('/Contact', 'HomeController@Contact');

// Auth
Route::get('/login', 'AuthController@login')->name('login');;
Route::post('/login', 'AuthController@authenticated');
Route::get('/logout', 'AuthController@logout');

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
route::resource('slider', 'SliderController')->middleware('auth');
route::resource('layanan', 'LayananController')->middleware('auth');
route::get('/contact', 'ContactController@index')->middleware('auth');
route::put('/contact{id}', 'ContactController@update')->middleware('auth');
// Dashboard/Pelanggan & Mitra
route::resource('pemerintahan', 'PemerintahanController')->middleware('auth');
route::resource('pendidikan', 'PendidikanController')->middleware('auth');
route::resource('isp', 'IspController')->middleware('auth');
route::resource('telco', 'TelcoController')->middleware('auth');
route::resource('finance', 'FinanceController')->middleware('auth');
route::resource('payment', 'PaymentController')->middleware('auth');


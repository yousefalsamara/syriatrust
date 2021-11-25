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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/i', 'HomeController@i');
Route::resource("/syriatrust",'SyriatrustController');
Route::get('/contact_us','HomeController@contact_us')->name('contact_us');
Route::get('/reload-captcha', [\App\Http\Controllers\SyriatrustController::class, 'reloadCaptcha']);

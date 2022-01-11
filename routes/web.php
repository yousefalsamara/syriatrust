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
    return redirect('home');
});



Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/lang', 'HomeController@testlang');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/i', 'HomeController@i');
//Route::resource("/syriatrust",'SyriatrustController');
    Route::get("/home/news/{id}","HomeController@showNews");
    Route::post("/contact_us",'HomeController@storeContact');
    Route::get('/contact_us','HomeController@contact_us')->name('contact_us');
    Route::get('/reload-captcha', [\App\Http\Controllers\HomeController::class, 'reloadCaptcha']);
    Route::get('adminpermissions','AdminPermissionsController@showpermissions');
    Route::resource("news","NewsController");
    Route::get('contact','ContactController@index');
    Route::post('contact_delete/{id}','ContactController@destroy')->name('contact_delete');
    Route::get('contact_show/{id}','ContactController@show')->name('contact_show');



});


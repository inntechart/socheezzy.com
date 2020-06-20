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
    return view('index');
});

Auth::routes();
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/spielecta', 'HomeController@spielecta')->name('spielecta');
Route::post('/connect', 'HomeController@connect')->name('connect');
Route::get('/terms-and-conditions', 'HomeController@terms_and_conditions')->name('terms_and_conditions');
Route::get('/privacy-policy', 'HomeController@privacy_policy')->name('privacy_policy');
Route::get('/cookies-policy', 'HomeController@cookies_policy')->name('cookies_policy');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', 'Admin/DashboardController@dashboard')->name('dashboard');
    });
});

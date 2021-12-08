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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::namespace('Auth')->group(function () {
    Route::get('login', 'AuthController@login')->name('login');
    Route::get('register', 'AuthController@register')->name('register');
    Route::post('login-post','AuthController@formLogin')->name('login.post');
    Route::post('login-register','AuthController@formRegister')->name('register.post');
    Route::get('logout', 'AuthController@logout')->name('logout');
});

Route::get('/', 'DashboardController@dashboard')->name('dashboard');

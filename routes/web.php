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

// Guest Routes
Route::group(['middleware' => ['guest']], function () {
   Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');
});

// Authentication Routes
Route::get('/register', 'App\Http\Controllers\AuthController@showRegister')->name('register');
Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('register.store');
Route::get('/login', 'App\Http\Controllers\AuthController@showLogin')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login.store');

Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/services', 'App\Http\Controllers\PagesController@services')->name('services');

// Authenticated Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
   Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
   Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
});

Route::resource('/posts', 'App\Http\Controllers\PostController');
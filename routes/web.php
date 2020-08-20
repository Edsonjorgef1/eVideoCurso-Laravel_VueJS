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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/subscriptions', 'HomeController@subscriptions')->name('subscriptions');
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::get('/upload', 'HomeController@upload')->name('upload');
Route::get('/upload-video', 'HomeController@uploadVideo')->name('uploadVideo');
Route::get('/channels', 'HomeController@channels')->name('channels');
Route::get('/single-channel', 'HomeController@singleChannel')->name('singleChannel');
Route::get('/video-page', 'HomeController@videoPage')->name('videoPage');
Route::get('/history-page', 'HomeController@historyPage')->name('historyPage');
Route::get('/categories', 'HomeController@categories')->name('categories');

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

Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(function (){
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/', 'HomeController@index')->name('index');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/subscriptions', 'HomeController@subscriptions')->name('subscriptions');
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::get('/upload', 'HomeController@upload')->name('upload');
Route::get('/upload-video', 'HomeController@uploadVideo')->name('uploadVideo');
Route::get('/video-page', 'HomeController@videoPage')->name('videoPage');
Route::get('/history-page', 'HomeController@historyPage')->name('historyPage');
// Route::get('/categories', 'HomeController@categories')->name('categories');
// Route::get('/channels', 'HomeController@channels')->name('channels');
// Route::get('/single-channel', 'HomeController@singleChannel')->name('singleChannel');
// Route::get('/channels/ID', 'HomeController@singleChannel');  //FIXED


/* Novas funcionalidades usando Resources */
Route::resource('categories', 'CategoryController');
Route::resource('courses', 'CourseController');
Route::resource('channels', 'ChannelController');
Route::resource('videos', 'VideoController');

Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

});
<?php

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

Route::get('/accidents', 'AccidentsController@index')->name('accidents.index');
Route::get('/accident/{id}', 'AccidentsController@show')->name('accident.show');
Route::get('/user/{username}', 'ProfileController@profile')->name('profile');
Route::post('/user/upload', 'ProfileController@upload_avatar')->name('upload-avatar');
Route::PUT('/user/update/{id}', 'ProfileController@update')->name('user-update');

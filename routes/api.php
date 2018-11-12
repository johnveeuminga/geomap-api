<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Accident Routes
// Route::middleware('auth:api')->get('/user', function (Request $request) {
Route::get('/accidents', 'AccidentsController@index');
Route::get('accident/{id}', 'AccidentsController@show');
Route::post('accident', 'AccidentsController@store');
Route::put('accident', 'AccidentsController@store');
Route::delete('accident/{id}', 'AccidentsController@destroy');
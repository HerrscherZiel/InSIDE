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

Route::post('login', 'Auth\AuthController@login');


//Route::resource('status', 'StatusController');
Route::get('status','StatusController@index');
Route::post('status','StatusController@store');
Route::put('/status/{id}','StatusController@update');
Route::delete('/status/{id}','StatusController@destroy');

Route::resource('datamember', 'DataMemberController');




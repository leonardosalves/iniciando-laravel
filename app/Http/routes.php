<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', ['uses' => 'UserController@index']);
        Route::get('add', ['uses' => 'UserController@create']);
        Route::post('add', ['uses' => 'UserController@post']);
        Route::get('{id}', ['uses' => 'UserController@show']);
    });
});

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

Route::get('/', function () {
    return view('welcome');
});

// All Suburbs routes
Route::get('/suburbs', 'SuburbsController@index');
Route::post('/suburbs', 'SuburbsController@create');

// Singular Suburbs routes
Route::get('/suburbs/{id}', 'SuburbsController@show');
Route::put('/suburbs/{id}', 'SuburbsController@update');
Route::delete('/suburbs/{id}', 'SuburbsController@destroy');

// All Downtown routes
Route::get('/downtown', 'DowntownController@index');
Route::post('/downtown', 'DowntownController@create');

// Singular Downtown routes
Route::get('/downtown/{id}', 'DowntownController@show');
Route::put('/downtown/{id}', 'DowntownController@update');
Route::delete('/downtown/{id}', 'DowntownController@destroy');

// All Midtown routes
Route::get('/midtown', 'MidtownController@index');
Route::post('/midtown', 'MidtownController@create');

// Singular Midtown routes
Route::get('/midtown/{id}', 'MidtownController@show');
Route::put('/midtown/{id}', 'MidtownController@update');
Route::delete('/midtown/{id}', 'MidtownController@destroy');

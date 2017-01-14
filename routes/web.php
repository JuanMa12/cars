<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {return view('welcome');});
Route::get('/bootstrap', function () {return view('bootstrap');});
Route::get('/dropdowns', function () {return view('components/dropdowns');});
Route::get('/jquery', function () {return view('components/jquery');});
Route::get('/autocomplete/demo', function () {return view('components/demo');});

Route::get('/makeyears/{make_id}','CarController@makeYear');
Route::get('/models/{makeyear_id}', 'CarController@model');

Route::get('/features', 'FeatureController@index');
Route::post('/features','FeatureController@store');


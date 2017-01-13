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

use App\Models\Car;
use App\Models\Feature;
use App\Models\MakeYear;
use App\Models\Model;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/dropdowns', function () {
    return view('components/dropdowns');
});

Route::get('/jquery', function () {
    return view('components/jquery');
});

Route::get('/makeyears/{make_id}', function ($make_id) {
    $years =  MakeYear::where('make_id',$make_id)
        ->select('id as value' , 'year as text')
        ->orderBy('year', 'ASC')->get()->toArray();
    array_unshift($years,['value' => '', 'text' => 'Select Value Year' ]);
    return $years;
});

Route::get('/models/{makeyear_id}', function ($makeyear_id) {
    $models =  Model::where('makeyear_id',$makeyear_id)
        ->select('id as value' , 'name as text')
        ->orderBy('name', 'ASC')->get()->toArray();
    array_unshift($models,['value' => '', 'text' => 'Select Value Model' ]);
    return $models;
});

Route::get('/features', function () {
    $car = Car::first();
    $features = Feature::orderBy('name', 'ASC')->pluck('name','id')->toArray();
    return view('components/features',compact('features','car'));
});

Route::post('/features', function () {
    $features = Request::get('features');
    Feature::addNewFeatures($features);
    $car = Car::first();
    $car->saveFeature($features);
    return redirect()->to('features');
});
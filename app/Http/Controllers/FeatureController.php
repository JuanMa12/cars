<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(){
        $car = Car::first();
        $features = Feature::orderBy('name', 'ASC')->pluck('name','id')->toArray();
        return view('components/features',compact('features','car'));
    }

    public function store(Request $request){
        $features = $request->get('features');
        Feature::addNewFeatures($features);
        $car = Car::first();
        $car->saveFeature($features);
        return redirect()->to('features');
    }
}

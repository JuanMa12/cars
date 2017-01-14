<?php

namespace App\Http\Controllers;

use App\Models\MakeYear;
use App\Models\Model;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function makeYear($make_id){
        $years =  MakeYear::where('make_id',$make_id)
            ->select('id as value' , 'year as text')
            ->orderBy('year', 'ASC')->get()->toArray();
        array_unshift($years,['value' => '', 'text' => 'Select Value Year' ]);
        return $years;
    }

    public function model($makeyear_id){
        $models =  Model::where('makeyear_id',$makeyear_id)
            ->select('id as value' , 'name as text')
            ->orderBy('name', 'ASC')->get()->toArray();
        array_unshift($models,['value' => '', 'text' => 'Select Value Model' ]);
        return $models;
    }
}

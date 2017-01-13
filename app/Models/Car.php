<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function features()
    {
        return $this->belongsToMany(Feature::class, 'cars_features');
    }

    public function getFeaturesAttribute(){
        return $this->features()->pluck('feature_id')->toArray();
    }

    public function saveFeature($features){
        $features = Feature::whereIn('id',$features)->orWhereIn('name',$features)->get();
        $this->features()->sync($features);
    }
}

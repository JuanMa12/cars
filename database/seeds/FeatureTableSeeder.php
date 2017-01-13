<?php

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create(['name' => '4-wheel Disc brakes']);
        Feature::create(['name' => 'Abs brakes']);
        Feature::create(['name' => '9 speakers']);
        Feature::create(['name' => 'Am/fm radio']);
        Feature::create(['name' => 'Mp3 decoder']);
        Feature::create(['name' => 'Security system']);
        Feature::create(['name' => 'Camera back']);
    }
}

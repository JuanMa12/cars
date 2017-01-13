<?php

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'condition' => 'new',
            'price'     => 42000000,
            'model_id'  => 1
        ]);
    }
}

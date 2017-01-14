<?php

use App\Models\Feature;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FeatureTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testFilterFeature()
    {
        Feature::create(['name' => 'Feature 1']);
        Feature::create(['name' => 'Feature 2']);

        Feature::addNewFeatures([' Feature 2 ','Feature 3',' Feature 3 ','Feature 4']);

        $this->assertSame
            (['Feature 1', 'Feature 2','Feature 3','Feature 4'], Feature::pluck('name')->toArray());
    }
}

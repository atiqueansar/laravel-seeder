<?php

namespace Database\Factories;

use App\Models\Alert;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = Alert::orderBy('id', 'desc')->first();
        return [
//            'id' =>  (!empty($lastRow)) ? $lastRow->id + 1 : 1,
            'is_drill' => rand(0, 1),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'organization_id' => (!empty($lastRow)) ? $lastRow->organization_id + 1 : 1,
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'alert_type_id' => (!empty($lastRow)) ? $lastRow->alert_type_id + 1 : 1,
            'zone_id' => (!empty($lastRow)) ? $lastRow->zone_id + 1 : 1,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\ZonePoint;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZonePointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = ZonePoint::orderBy('zone_id', 'desc')->first();
        return [
            'zone_id' => (!empty($lastRow)) ? $lastRow->zone_id + 1 : 1,
            'order' => (!empty($lastRow)) ? $lastRow->order + 1 : 1,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\DeviceHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceHistory::orderBy('device_id', 'desc')->first();
        return [
//            'id' => (!empty($lastRow)) ? $lastRow->id + 1 : 1,
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'accuracy' => (!empty($lastRow)) ? $lastRow->accuracy + 1 : 1,
            'location_description' => $this->faker->address
        ];
    }
}

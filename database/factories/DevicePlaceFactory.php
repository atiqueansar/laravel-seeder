<?php

namespace Database\Factories;

use App\Models\DevicePlace;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevicePlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DevicePlace::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'place_id' => (!empty($lastRow)) ? $lastRow->place_id + 1 : 1,
            'last_notify_left_at' => now(),
            'last_notify_arrived_at' => now()->addYear(1),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\DeviceEmergency;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceEmergencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceEmergency::orderBy('id', 'desc')->first();
        return [
            'id' => (!empty($lastRow)) ? $lastRow->id + 1 : 1,
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'type' => $this->faker->name,
        ];
    }
}

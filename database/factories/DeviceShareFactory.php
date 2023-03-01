<?php

namespace Database\Factories;

use App\Models\DeviceShare;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceShareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceShare::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'email' => $this->faker->unique()->safeEmail,
            'created_at' => now(),
        ];
    }
}

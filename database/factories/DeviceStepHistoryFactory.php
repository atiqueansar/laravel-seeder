<?php

namespace Database\Factories;

use App\Models\Device;
use App\Models\DeviceStepHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceStepHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceStepHistory::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'date' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
            'distance' => $this->faker->randomFloat(2, 0, 5),
            'calories' => $this->faker->randomFloat(2, 0, 5),
        ];
    }
}

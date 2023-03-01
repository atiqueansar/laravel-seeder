<?php

namespace Database\Factories;

use App\Models\DeviceSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceSetting::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'fall_flag' => $this->faker->numberBetween(0, 1),
            'face' => $this->faker->numberBetween(0, 100),
            'language' => $this->faker->numberBetween(0, 100),
            'sensor' => $this->faker->numberBetween(0, 1),
            'sos' => $this->faker->name,
            'phb' => $this->faker->name,
        ];
    }
}

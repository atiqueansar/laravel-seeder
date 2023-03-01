<?php

namespace Database\Factories;

use App\Models\Device;
use App\Models\DeviceEid;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceEidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceEid::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'eid_device_id' => $this->faker->unique->numberBetween(1, 100000),
        ];
    }
}

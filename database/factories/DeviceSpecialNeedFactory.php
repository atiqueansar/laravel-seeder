<?php

namespace Database\Factories;

use App\Models\DeviceSpecialNeed;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceSpecialNeedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceSpecialNeed::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'special_need_id' => (!empty($lastRow)) ? $lastRow->special_need_id + 1 : 1,
        ];
    }
}

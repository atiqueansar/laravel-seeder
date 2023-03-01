<?php

namespace Database\Factories;

use App\Models\Device;
use App\Models\DeviceCategory;
use App\Models\DeviceConfigAlerts;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceConfigAlertsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceConfigAlerts::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

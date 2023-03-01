<?php

namespace Database\Factories;

use App\Models\DeviceMedicalMedicalDevice;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceMedicalMedicalDeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceMedicalMedicalDevice::orderBy('device_medical_id', 'desc')->first();
        return [
            'device_medical_id' => (!empty($lastRow)) ? $lastRow->device_medical_id + 1 : 1,
            'name'              => $this->faker->name,
        ];
    }
}

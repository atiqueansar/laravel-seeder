<?php

namespace Database\Factories;

use App\Models\DeviceMedicalEmergencyContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceMedicalEmergencyContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceMedicalEmergencyContact::orderBy('device_medical_id', 'desc')->first();
        return [
            'device_medical_id' => (!empty($lastRow)) ? $lastRow->device_medical_id + 1 : 1,
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}

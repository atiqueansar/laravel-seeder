<?php

namespace Database\Factories;

use App\Models\DeviceMedicalMedication;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceMedicalMedicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceMedicalMedication::orderBy('device_medical_id', 'desc')->first();
        return [
            'device_medical_id' => (!empty($lastRow)) ? $lastRow->device_medical_id + 1 : 1,
            'name' => $this->faker->name,
            'how_many_times_a_day' => 2,
            'mon' => 1,
            'tue' => 1
        ];
    }
}

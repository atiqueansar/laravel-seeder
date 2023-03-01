<?php

namespace Database\Factories;

use App\Models\DeviceMedicalCovidVaccination;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceMedicalCovidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceMedicalCovidVaccination::orderBy('device_medical_id', 'desc')->first();
        return [
            'device_medical_id' => (!empty($lastRow)) ? $lastRow->device_medical_id + 1 : 1,
            'covid_test' => $this->faker->numberBetween(0, 1),
            'covid_vaccination' => $this->faker->numberBetween(0, 1),
        ];
    }
}

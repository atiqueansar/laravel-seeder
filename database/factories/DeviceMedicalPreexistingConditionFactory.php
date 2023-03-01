<?php

namespace Database\Factories;

use App\Models\DeviceMedicalPreexistingCondition;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceMedicalPreexistingConditionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceMedicalPreexistingCondition::orderBy('device_medical_id', 'desc')->first();
        return [
            'device_medical_id' => (!empty($lastRow)) ? $lastRow->device_medical_id + 1 : 1,
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}

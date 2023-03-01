<?php

namespace Database\Factories;

use App\Models\DeviceMedical;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceMedicalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceMedical::orderBy('device_id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'blood_type' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
        ];
    }
}

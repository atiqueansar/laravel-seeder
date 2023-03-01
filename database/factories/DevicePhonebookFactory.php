<?php

namespace Database\Factories;

use App\Models\DevicePhonebook;
use Illuminate\Database\Eloquent\Factories\Factory;

class DevicePhonebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DevicePhonebook::orderBy('id', 'desc')->first();
        return [
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'order' => (!empty($lastRow)) ? $lastRow->order + 1 : 1,
            'name' => $this->faker->name,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}

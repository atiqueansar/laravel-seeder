<?php

namespace Database\Factories;

use App\Models\DeviceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceCategory::orderBy('id', 'desc')->first();
        return [
            'category_id' => (!empty($lastRow)) ? $lastRow->alert_type_id + 1 : 1,
            'name' => $this->faker->name,
            'code' => $this->faker->firstName,
            'imei' => $this->faker->unique()->name,
        ];
    }
}

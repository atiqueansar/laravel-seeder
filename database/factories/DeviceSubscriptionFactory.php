<?php

namespace Database\Factories;

use App\Models\DeviceSubscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceSubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = DeviceSubscription::orderBy('device_id', 'desc')->first();
        return [
            'timestamp' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'nro_order' => $this->faker->name
        ];
    }
}

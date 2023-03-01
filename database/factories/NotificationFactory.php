<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = Notification::orderBy('user_id', 'desc')->first();
        return [
//            'id' => (!empty($lastRow)) ? $lastRow->id + 1 : 1,
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'type' => $this->faker->name,
            'message' => $this->faker->sentence,
            'timestamp' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = Place::orderBy('user_id', 'desc')->first();
        return [
            'name' => $this->faker->name,
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'location_description' => $this->faker->text,
            'notify_arrival' => $this->faker->boolean,
            'last_notify_arrival_at' => $this->faker->dateTime,
            'radius' => $this->faker->randomFloat(2, 0, 5),
            'last_notify_leave_at' => $this->faker->dateTime,
        ];
    }
}

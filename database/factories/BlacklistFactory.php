<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlacklistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'ip' => $this->faker->ipv4,
        ];
    }
}

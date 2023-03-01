<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CycleProcessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->firstName,
            'last_run_at' => now(),
        ];
    }
}

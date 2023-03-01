<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
            'address' => $this->faker->address,
            'country_code' => $this->faker->countryCode,
            'state_code' => $this->faker->state,
            'postal_code' => $this->faker->postcode
        ];
    }
}

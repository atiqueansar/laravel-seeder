<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file_name' => $this->faker->name,
            'file_type' => $this->faker->mimeType,
            'storage_mode' => $this->faker->randomElement(['local', 's3']),
            'full_url' => $this->faker->url,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\OrganizationEnvvar;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationEnvvarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = OrganizationEnvvar::orderBy('organization_id', 'desc')->first();
        return [
            'organization_id' => (!empty($lastRow)) ? $lastRow->organization_id + 1 : 1,
            'key' => $this->faker->word,
            'value' => $this->faker->word,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

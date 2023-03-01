<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = Group::orderBy('organization_id', 'desc')->first();
        return [
            'organization_id' => (!empty($lastRow)) ? $lastRow->organization_id + 1 : 1,
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}

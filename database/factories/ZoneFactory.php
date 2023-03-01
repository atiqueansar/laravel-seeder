<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $zone = Zone::orderBy('organization_id', 'desc')->first();
        return [
            'name' => $this->faker->name,
            'organization_id' => (!empty($zone)) ? $zone->organization_id + 1 : 1,
        ];
    }
}

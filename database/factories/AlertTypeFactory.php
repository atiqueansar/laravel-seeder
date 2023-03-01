<?php

namespace Database\Factories;

use App\Models\AlertType;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $alertType = AlertType::orderBy('organization_id', 'desc')->first();
        return [
            'organization_id' => (!empty($alertType)) ? $alertType->organization_id + 1 : 1,
            'name' => $this->faker->name,
        ];
    }
}

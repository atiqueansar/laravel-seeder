<?php

namespace Database\Factories;

use App\Models\AlertType;
use App\Models\AlertTypeAction;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertTypeActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = AlertTypeAction::orderBy('alert_type_id', 'desc')->first();
        return [
            'alert_type_id' => (!empty($lastRow)) ? $lastRow->alert_type_id + 1 : 1,
            'send_staff' => $this->faker->name,
        ];
    }
}

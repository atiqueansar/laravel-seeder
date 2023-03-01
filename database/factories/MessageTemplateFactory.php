<?php

namespace Database\Factories;

use App\Models\MessageTemplate;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageTemplateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = MessageTemplate::orderBy('organization_id','desc')->first('id');

        return [
            'organization_id' => (!empty($lastRow)) ? $lastRow->organization_id + 1 : 1,
            'name' => $this->faker->name,
            'text' => $this->faker->name,
        ];
    }
}

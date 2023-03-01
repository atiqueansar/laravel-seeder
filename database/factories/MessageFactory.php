<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = Message::orderBy('device_id', 'desc')->first();
        return [
//            'id' => (!empty($lastRow)) ? $lastRow->id + 1 : 1,
            'device_id' => (!empty($lastRow)) ? $lastRow->device_id + 1 : 1,
            'text' => $this->faker->text(100),
            'hash' => $this->faker->sha256,
        ];
    }
}

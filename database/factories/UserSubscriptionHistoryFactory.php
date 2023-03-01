<?php

namespace Database\Factories;

use App\Models\UserSubscriptionHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSubscriptionHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = UserSubscriptionHistory::orderBy('user_id', 'desc')->first();
        return [
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'subscription_code' => 'basic',
            'platform' => $this->faker->randomElement(['android', 'ios']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'timestamp' => now(),
        ];
    }
}

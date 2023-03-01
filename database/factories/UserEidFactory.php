<?php

namespace Database\Factories;

use App\Models\UserEid;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserEidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = UserEid::orderBy('user_id', 'desc')->first();
        return [
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'eid_user_id' => (!empty($lastRow)) ? $lastRow->eid_user_id + 1 : 1,
        ];
    }
}

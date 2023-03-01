<?php

namespace Database\Factories;

use App\Models\UserGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = UserGroup::orderBy('user_id', 'desc')->first();
        return [
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'group_id' => (!empty($lastRow)) ? $lastRow->group_id + 1 : 1,
        ];
    }
}

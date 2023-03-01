<?php

namespace Database\Factories;

use App\Models\UserOrganization;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserOrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastRow = UserOrganization::orderBy('user_id', 'desc')->first();
        return [
            'user_id' => (!empty($lastRow)) ? $lastRow->user_id + 1 : 1,
            'organization_id' => (!empty($lastRow)) ? $lastRow->organization_id + 1 : 1,
        ];
    }
}

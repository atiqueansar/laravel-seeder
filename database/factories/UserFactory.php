<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $email = $this->faker->unique()->safeEmail;
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;
        $password = Hash::make('123456');
        return [
            'email' => $email,
            'email_canonical' => $email,
            'password' => $password,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'fullname' => $firstName.' '.$lastName,
            'subscription_code' => 'basic',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

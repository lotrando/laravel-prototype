<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $last_name = $this->faker->lastName();
        $first_name = $this->faker->firstName();

        return [
            'login_name' => strtolower($last_name . '' . mb_substr($first_name, 0, 1)),
            'last_name' => $last_name,
            'first_name' => $first_name,
            'email' => strtolower($last_name . '.' . $first_name) . '@' . $this->faker->unique()->domainName(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(15),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

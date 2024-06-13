<?php

namespace Database\Factories;

use App\Models\InternalUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InternalUser>
 */
class InternalUserFactory extends Factory
{
    protected $model = InternalUser::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // password
            'role' => $this->faker->randomElement(['manager', 'operator', 'coordinator']),
            'remember_token' => Str::random(10),
        ];
    }
}

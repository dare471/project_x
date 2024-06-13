<?php

namespace Database\Factories;

use App\Models\ExternalUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExternalUser>
 */
class ExternalUserFactory extends Factory
{
    protected $model = ExternalUser::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // password
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'remember_token' => Str::random(10),
        ];
    }
}

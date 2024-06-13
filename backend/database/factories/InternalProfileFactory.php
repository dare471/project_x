<?php

namespace Database\Factories;

use App\Models\InternalProfile;
use App\Models\InternalUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InternalProfile>
 */
class InternalProfileFactory extends Factory
{
    protected $model = InternalProfile::class;

    public function definition()
    {
        return [
            'user_id' => InternalUser::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}

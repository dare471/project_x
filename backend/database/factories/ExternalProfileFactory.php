<?php

namespace Database\Factories;

use App\Models\ExternalProfile;
use App\Models\ExternalUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExternalProfile>
 */
class ExternalProfileFactory extends Factory
{
    protected $model = ExternalProfile::class;

    public function definition()
    {
        return [
            'user_id' => ExternalUser::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}

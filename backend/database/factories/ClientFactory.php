<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'id' => (string) Str::ulid(),
            'name' => $this->faker->name,
            'region' => $this->faker->state,
            'bin' => $this->faker->randomNumber(9, true),
            'contact_details' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}

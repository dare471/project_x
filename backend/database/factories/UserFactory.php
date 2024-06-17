<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastName' => $this->faker->lastName,
            'surName' => $this->faker->lastName,
            'bin' => $this->faker->unique()->numerify('##########'),
            'region' => $this->faker->unique()->state,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->unique()->phoneNumber,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // или $this->faker->password
            'type' => 'internal',
            'remember_token' => Str::random(10),
        ];
    }
}

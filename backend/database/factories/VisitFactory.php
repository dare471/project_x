<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\InternalUser;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visit>
 */
class VisitFactory extends Factory
{
    protected $model = Visit::class;

    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'employee_id' => InternalUser::factory(),
            'visit_date' => $this->faker->date,
            'visit_purpose' => $this->faker->sentence,
        ];
    }
}

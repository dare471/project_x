<?php

namespace Database\Factories;

use App\Models\User;
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
            'client_id' => '01J0AJZM3Z9EKKA7TFW97KBFYW',
            'employee_id' => '01J0AK0SSXHF79F9T4B6F5FX1Z',
            'visit_date' => $this->faker->date,
            'visit_purpose' => $this->faker->sentence,
        ];
    }
}

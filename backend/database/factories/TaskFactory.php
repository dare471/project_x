<?php

namespace Database\Factories;

use App\Models\InternalUser;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'employee_id' => InternalUser::factory(),
            'task_title' => $this->faker->sentence,
            'task_description' => $this->faker->paragraph,
            'due_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['pending', 'completed']),
        ];
    }
}

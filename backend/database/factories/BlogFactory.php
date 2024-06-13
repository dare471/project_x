<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\ExternalUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;
    public function definition()
    {
        return [
            'author_id' => ExternalUser::factory(),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}

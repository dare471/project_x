<?php

namespace Database\Factories;

use App\Models\Blog;
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
            'author_id' => '01J0AK0SSXHF79F9T4B6F5FX1Z',
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}

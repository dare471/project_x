<?php
namespace Database\Factories;

use App\Models\Blog\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'sub_category_id' => $this->faker->numberBetween(1, 10), // assuming sub_category_id is an integer
        ];
    }
}

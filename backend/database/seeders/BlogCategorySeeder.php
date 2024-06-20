<?php
namespace Database\Seeders;

use App\Models\Blog\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BlogSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(5)->create()->each(function ($user) {
            // Создать 2 блога для каждого пользователя
            Blog::factory()->count(2)->create([
                'author_id' => $user->id,
            ]);
        });
    }
}

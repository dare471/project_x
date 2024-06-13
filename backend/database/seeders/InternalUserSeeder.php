<?php

namespace Database\Seeders;

use App\Models\InternalUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InternalUser::factory()->count(10)->create();
    }
}

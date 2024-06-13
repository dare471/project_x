<?php

namespace Database\Seeders;

use App\Models\ExternalUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExternalUser::factory()->count(10)->create();
    }
}

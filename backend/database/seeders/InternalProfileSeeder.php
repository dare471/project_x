<?php

namespace Database\Seeders;

use App\Models\InternalProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternalProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InternalProfile::factory()->count(10)->create();
    }
}

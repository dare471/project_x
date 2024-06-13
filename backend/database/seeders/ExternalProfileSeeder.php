<?php

namespace Database\Seeders;

use App\Models\ExternalProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalProfileSeeder extends Seeder
{
    public function run()
    {
        ExternalProfile::factory()->count(10)->create();
    }
}

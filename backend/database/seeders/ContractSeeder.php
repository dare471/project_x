<?php

namespace Database\Seeders;

use App\Models\Contract\Contract;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contract::factory()->count(10)->create();
    }
}

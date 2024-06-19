<?php

namespace Database\Seeders;

use App\Models\Contract\ContractDetail;
use Illuminate\Database\Seeder;

class ContractDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContractDetail::factory()->count(10)->create();
    }
}

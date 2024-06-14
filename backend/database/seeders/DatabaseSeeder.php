<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ContractSeeder::class,
            ContractDetailSeeder::class,
            ClientSeeder::class,
            ProductSeeder::class,
            ServiceSeeder::class,
            VisitSeeder::class,
            TaskSeeder::class,
            BlogSeeder::class,
            UserSeeder::class,
        ]);
    }
}

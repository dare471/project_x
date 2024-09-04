<?php

namespace Database\Factories\Contract;

use App\Models\Client;
use App\Models\Contract\Contract;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract\Contract>
 */
class ContractFactory extends Factory
{
    protected $model = Contract::class;

    public function definition()
    {
        return [
            'contract_id' => (string) Str::ulid(),
            'contract_number' => $this->faker->unique()->numerify('CON-#####'),
            'contract_type' => $this->faker->randomElement(['product', 'service']),
            'contract_status' => (string) Str::ulid(),
            'contract_status_description' => $this->faker->sentence,
            'client_id' => Client::factory(),
            'client_name' => $this->faker->name,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'amount' => $this->faker->randomFloat(2, 1000, 10000),
            'payment_terms' => $this->faker->sentence,
            'products_services' => $this->faker->paragraph,
        ];
    }
}

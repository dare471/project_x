<?php

namespace Database\Factories\Contract;

use App\Models\Contract\Contract;
use App\Models\Contract\ContractDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract\ContractDetail>
 */
class ContractDetailFactory extends Factory
{
    protected $model = ContractDetail::class;

    public function definition()
    {
        return [
            'contract_id' => Contract::factory(),
            'stage_description' => $this->faker->sentence,
            'stage_date' => $this->faker->date,
            'stage_amount' => $this->faker->randomFloat(2, 100, 1000),
            'payment_status' => $this->faker->randomElement(['pending', 'completed']),
            'additional_info' => $this->faker->paragraph,
            'products' => json_encode([$this->faker->word]),
            'services' => json_encode([$this->faker->word]),
        ];
    }
}

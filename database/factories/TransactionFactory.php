<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transfer_date'=>$this->faker->date,
            'value'=>$this->faker->randomFloat(1,1,10000),
            'status_of_transaction_id'=>random_int(1,10),
            'user_id'=>random_int(1,10),


        ];
    }
}

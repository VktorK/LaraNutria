<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promocode>
 */
class PromocodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value'=>$this->faker->name,
            'date_of_end'=>$this->faker->date,
            'summ'=>$this->faker->randomFloat(1,1,100000),
            'summ_from'=>$this->faker->randomFloat(1,1,100000),
            'user_id'=>random_int(1,10)

        ];
    }
}

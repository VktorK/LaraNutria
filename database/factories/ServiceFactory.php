<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->title,
            'content'=>$this->faker->name,
            'price'=>$this->faker->randomFloat(1,1,10000),
            'category_id'=>random_int(1,10),
            'order_id'=>random_int(1,10),
        ];
    }
}

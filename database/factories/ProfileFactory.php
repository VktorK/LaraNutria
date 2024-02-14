<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Last_name'=>$this->faker->lastName,
            'First_name'=>$this->faker->firstName,
            'Middle_name'=>$this->faker->domainName(),
            'date_of_but'=>$this->faker->date,
            'residential_address'=>$this->faker->address,
            'login'=>$this->faker->domainName,
            'balance'=>$this->faker->randomFloat(1,1,50000),
            'gender_id'=>random_int(1,10),
            'user_id'=>random_int(1,10),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2,3)),
            'slug' => $this->faker->slug,
            'short_description' => $this->faker->sentence(mt_rand(4,8)),
            'full_description' => $this->faker->sentence(mt_rand(8,12)),
            'price' => $this->faker->numberBetween(10000,50000),
            'category_id' => mt_rand(1,2)
        ];
    }
}

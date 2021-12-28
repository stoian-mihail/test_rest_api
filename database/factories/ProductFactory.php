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
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph,
            'stock' => $this->faker->randomNumber(null, 0, 1000),
            'price' => $this->faker->randomFloat(null, 1),
        ];
    }
}

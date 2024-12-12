<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Generates a random product name
            'category' => $this->faker->word, // Generates a random category
            'price' => $this->faker->randomFloat(2, 5, 100), // Generates a price between 5 and 100 with 2 decimal points
            'created_at' => now(), // Sets the current timestamp
            'updated_at' => now(), // Sets the current timestamp
        ];
    }
}


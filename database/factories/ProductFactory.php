<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'category_id' => mt_rand(1,3),
            'product' => fake()->sentence(),
            'slug' => fake()->slug(),
            'price' => 1299000,
            'stock' => fake()->numberBetween(10, 100),
            'desc' => fake()->paragraph(),
        ];
    }
}

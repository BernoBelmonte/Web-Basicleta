<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
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
            'product_name' => $this->faker->firstName(),
            'brand'=> $this->faker->randomElement(['Bike', 'Clothes','Bike parts']),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(10,50),
            'stock_quantity' => $this->faker->numberBetween(10,100)
        ];
    }
}

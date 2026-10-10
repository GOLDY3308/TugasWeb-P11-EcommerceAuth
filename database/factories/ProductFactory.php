<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);
        return [
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'name' => ucwords($name),
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(10, 1000) * 1000, // Harga kelipatan 1000
            'stock' => fake()->numberBetween(0, 100),
        ];
    }
}
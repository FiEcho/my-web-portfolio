<?php

namespace Database\Factories;

use App\Models\Product;
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
    public function definition()
    {
        return [
            'id' => Product::factory()->create(),
            'nama' => $this->faker->name(),
            'deskripsi' => $this->faker->paragraph(),
            'harga' => $this->faker->randomDigit(),
            'gambar' => $this->faker->imageUrl(200,200),

        ];
    }
}

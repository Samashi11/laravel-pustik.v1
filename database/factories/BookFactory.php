<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // * create faker data for each field
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name,
            'publisher' => $this->faker->company,
            'isbn' => $this->faker->ean13,
            'category_id' => Category::factory(),
            'cover' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['available', 'unavailable']),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => fake()->imageUrl(),
            'title' => fake()->sentence(2),
            'rating' => fake()->randomFloat(0, 70, 95),
            'year' => fake()->date(),
            'genre' => fake()->sentence(4)
        ];
    }
}

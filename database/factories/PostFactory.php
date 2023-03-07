<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => fake()->randomDigit(),
            'category_id' => fake()->randomDigit(),
            'judul' => fake()->word(),
            'slug' => fake()->paragraph(),
            'execpt' => fake()->paragraph(),
            'parag' => fake()->paragraphs(),

        ];
    }
}

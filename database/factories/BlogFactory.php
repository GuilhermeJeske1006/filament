<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'subtitle' => $this->faker->title,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->realText,
        ];
    }
}
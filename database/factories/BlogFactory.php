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
            "titulo" => fake()->name(),
            "sutitulo" => fake()->name(),
            "descricao" => fake()->text(),
            "imagem" => "chevrolet-onix-1.0-mpfi-lt-8v-flex-4p-manual-wmimagem18372185010.jpg",
            "categoria_id" => 1
        ];
    }
}

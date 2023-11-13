<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'nome' => fake()->sentence(2),
                'valor' => fake()->randomFloat(2, 10, 1000),
                'quantidade' => fake()->numberBetween(1, 100),
                'descricao' => fake()->paragraph(3),
            ];
    }
}

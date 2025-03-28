<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarefa>
 */
class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descricao' => $this->faker->text(200),
            'data_criacao' => now(),
            'data_prevista' => $this->faker->optional()->dateTimeBetween('now', '+1 year'),
            'data_encerramento' => $this->faker->optional()->dateTimeBetween('now', '+1 year'),
            'situacao' => $this->faker->randomElement(['pendente', 'em andamento', 'concluida']),
        ];
    }
}

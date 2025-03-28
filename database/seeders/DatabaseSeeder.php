<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tarefas = [
            ['descricao' => 'Finalizar relatório', 'data_criacao' => '2025-03-20', 'data_prevista' => '2025-03-27', 'data_encerramento' => null, 'situacao' => 'pendente'],
            ['descricao' => 'Revisar código', 'data_criacao' => '2025-03-18', 'data_prevista' => '2025-03-25', 'data_encerramento' => '2025-03-24', 'situacao' => 'concluída'],
            ['descricao' => 'Planejar reunião', 'data_criacao' => '2025-03-15', 'data_prevista' => '2025-03-22', 'data_encerramento' => null, 'situacao' => 'pendente'],
            ['descricao' => 'Enviar e-mails', 'data_criacao' => '2025-03-10', 'data_prevista' => '2025-03-17', 'data_encerramento' => '2025-03-16', 'situacao' => 'concluída'],
            ['descricao' => 'Atualizar sistema', 'data_criacao' => '2025-03-05', 'data_prevista' => '2025-03-12', 'data_encerramento' => null, 'situacao' => 'pendente'],
            ['descricao' => 'Criar apresentação', 'data_criacao' => '2025-03-01', 'data_prevista' => '2025-03-08', 'data_encerramento' => '2025-03-07', 'situacao' => 'concluída'],
            ['descricao' => 'Testar funcionalidades', 'data_criacao' => '2025-02-25', 'data_prevista' => '2025-03-04', 'data_encerramento' => null, 'situacao' => 'em andamento'],
            ['descricao' => 'Corrigir bugs', 'data_criacao' => '2025-02-20', 'data_prevista' => '2025-02-27', 'data_encerramento' => '2025-02-26', 'situacao' => 'concluída'],
            ['descricao' => 'Documentar projeto', 'data_criacao' => '2025-02-15', 'data_prevista' => '2025-02-22', 'data_encerramento' => null, 'situacao' => 'pendente'],
            ['descricao' => 'Treinar equipe', 'data_criacao' => '2025-02-10', 'data_prevista' => '2025-02-17', 'data_encerramento' => '2025-02-16', 'situacao' => 'concluída'],
        ];

        foreach ($tarefas as $tarefa) {
            Tarefa::create($tarefa);
        }
    }
}

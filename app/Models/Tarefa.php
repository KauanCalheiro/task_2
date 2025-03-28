<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
    /** @use HasFactory<\Database\Factories\TarefaFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "id",
        "descricao",
        "data_criacao",
        "data_prevista",
        "data_encerramento",
        "situacao",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];
}

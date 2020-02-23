<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    public $table = 'ocorrencias';

    public $fillable = [
        'descricao',
        'ocorrencia',
        'status',
        'horario',
        'gravidade',
        'user_id',
        'condominio_id',
    ];
}

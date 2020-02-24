<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    public $table = 'ocorrencias';

    public $fillable = [
        'descricao',
        'status',
        'data',
        'hora',
        'gravidade',
        'user_id',
        'morador_id',
        'condominio_id',

    ];
}

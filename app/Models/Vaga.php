<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    public $table = 'vagas';

    public $fillable = [
        'identificacao',
        'andar',
        'observacoes',
        'morador_id',
    ];
}

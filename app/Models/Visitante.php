<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    public $table = 'visitantes';

    public $fillable = [
        'nome',
        'chegada',
        'saida',
        'transporte',
        'morador_responsavel_id',
    ];
}

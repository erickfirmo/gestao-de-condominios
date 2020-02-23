<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaComum extends Model
{
    public $table = 'areas_comuns';

    public $fillable = [
        'nome',
        'abertura',
        'fechamento',
        'status',
        'descricao',
        'comentarios',
    ];
}

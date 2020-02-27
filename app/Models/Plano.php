<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    public $table = 'planos';

    public $fillable = [
        'nome',
        'ativado',
        'periodo',
        'preco',
        'min_parcelas',
        'max_parcelas',
        'descricao',
    ];
}

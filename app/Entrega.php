<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    public $table = 'entregas';

    public $fillable = [
        'entregador',
        'receptor',
        'tipo',
        'descricao',
        'status',
        'morador_id',
        'imovel_id',
    ];
}

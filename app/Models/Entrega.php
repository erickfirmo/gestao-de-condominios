<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    public $table = 'entregas';

    public $fillable = [
        'nome_do_entregador',
        'receptor',
        'tipo',
        'descricao',
        'status',
        'morador_id',
        'imovel_id',
    ];
}

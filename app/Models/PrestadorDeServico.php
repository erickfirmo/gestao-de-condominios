<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestadorDeServico extends Model
{
    public $table = 'prestadores_de_servicos';

    public $fillable = [
        'nome',
        'chegada',
        'saida',
        'morador_id',
        'funcionario_id',
    ];
}

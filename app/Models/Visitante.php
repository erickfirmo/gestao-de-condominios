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
        'prestador_de_servico',
        'morador_id',
        'funcionario_id',
    ];

    public function morador()
    {
        return $this->belongsTo(Morador::class, 'morador_id');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    public $table = 'relatorios';

    public $fillable = [
        'descricao',
        'tipo',
        'funcionario_id',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}

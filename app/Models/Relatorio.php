<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    public $table = 'relatorios';

    public $fillable = [
        'descricao',
        'operacao',
        'funcionario_id',
        'parent_id',
        'parent_table',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

}

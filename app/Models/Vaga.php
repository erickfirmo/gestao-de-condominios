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

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
}

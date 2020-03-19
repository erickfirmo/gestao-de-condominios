<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    public $table = 'ocorrencias';

    public $fillable = [
        'descricao',
        'status',
        'data',
        'hora',
        'gravidade',
        'user_id',
        'morador_id',
        'condominio_id',

    ];

    public function morador()
    {
        return $this->belongsTo(Morador::class, 'morador_id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
}

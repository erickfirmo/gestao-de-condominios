<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    public $table = 'ocorrencias';

    public $fillable = [
        'titulo',
        'descricao',
        'status',
        'data',
        'hora',  
        'gravidade',
        'morador_id',

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

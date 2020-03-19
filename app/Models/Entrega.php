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

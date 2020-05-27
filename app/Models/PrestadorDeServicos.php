<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestadorDeServicos extends Model
{
    public $table = 'prestadores_de_servicos';

    public $fillable = [
        'nome',
        'entrada',
        'saida',
        'identidade',
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

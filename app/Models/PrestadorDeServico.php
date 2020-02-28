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
        'identidade',
        'morador_id',
    ];

    public function morador()
    {
        return $this->belongsTo(Morador::class, 'morador_id');
    }
}

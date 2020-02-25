<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    public $table = 'moradores';

    public $fillable = [
        'nome',
        'genero',
        'observacoes',
        'proprietario',
        'imovel_id',
    ];

    public function imovel()
    {
        return $this->belongsTo(Imovel::class, 'imovel_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    public $table = 'moradores';

    public $fillable = [
        'nome',
        'genero',
        'comentarios',
        'proprietario',
        'imovel_id',
    ];
}

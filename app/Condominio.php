<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    public $table = 'condominios';

    public $fillable = [
        'nome',
        'descricao',
        'comentarios',
        'endereco_id',
        'conta_id',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    public $table = 'vagas';

    public $fillable = [
        'identificacao',
        'andar',
        'comentarios',
        'morador_id',
    ];
}

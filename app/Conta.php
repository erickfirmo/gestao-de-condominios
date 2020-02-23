<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    public $table = 'contas';

    public $fillable = [
        'nome',
        'descricao',
        'admin_id',
        'empresa_id',
    ];
}


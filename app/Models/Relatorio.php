<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    public $table = 'relatorios';

    public $fillable = [
        'descricao',
        'tipo',
        'user_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $table = 'pets';

    public $fillable = [
        'nome',
        'especie',
        'raca',
        'descricao',
        'morador_id',
    ];  
}

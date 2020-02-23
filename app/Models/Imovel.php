<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    public $table = 'imoveis';

    public $fillable = [
        'numero',
        'bloco',
        'andar',
        'descricao',
        'comentarios',
        'animais',
    ];
}

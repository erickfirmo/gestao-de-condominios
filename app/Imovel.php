<?php

namespace App;

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

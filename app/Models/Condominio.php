<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    public $table = 'condominios';

    public $fillable = [
        'nome',
        'descricao',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf_id',
        'complemento',
        'observacoes',
        'empresa_id',
    ];
}

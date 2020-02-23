<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $table = 'empresas';

    public $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'email',
        'telefone_1',
        'telefone_2',
        'responsavel_para_contato'
    ];
}

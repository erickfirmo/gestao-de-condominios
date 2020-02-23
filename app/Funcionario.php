<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $table = 'funcionarios';

    public $fillable = [
        'nome_completo',
        'identidade',
        'genero',
        'servico_temporario',
        'duracao',
        'inicio',
        'finalizacao_do_servico',
        'foto',
        'telefone_1',
        'telefone_2',
        'jornada_de_trabalho',
        'carga_horaria',
    ];
}

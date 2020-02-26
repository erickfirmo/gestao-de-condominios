<?php

namespace App\Models;

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
        'responsavel_para_contato',
    ];
    
    public function condominios()
    {
        return $this->hasMany(Condominio::class, 'empresa_id', 'id');
    }

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'empresa_id', 'id');
    }
}

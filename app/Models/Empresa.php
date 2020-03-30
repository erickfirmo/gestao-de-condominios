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

    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'empresa_id', 'id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
}

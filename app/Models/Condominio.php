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

    public function uf()
    {
        return $this->belongsTo(Uf::class, 'uf_id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'condominio_id');
    }

    public function areas_comuns()
    {
        return $this->hasMany(AreaComum::class, 'condominio_id', 'id');
    }

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'condominio_id', 'id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
}

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
        'observacoes',
        'condominio_id'
    ];

    public function condominio()
    {
        return $this->belongsTo(Condominio::class, 'condominio_id');
    }

    public function moradores()
    {
        return $this->hasMany(Morador::class, 'imovel_id', 'id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id', 'id');
    }

    public function imagens()
    {
        return $this->hasMany(ImagemDaEntidade::class, 'parent_id', 'id');
    }
}

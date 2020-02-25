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
        $this->belongsTo(Condominio::class, 'condominio_id');
    }

    public function moradores()
    {
        return $this->hasMany(Morador::class, 'imovel_id', 'id');
    }
}

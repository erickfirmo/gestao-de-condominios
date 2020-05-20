<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $table = 'funcionarios';

    public $fillable = [
        'nome_completo',
        'identidade',
        'genero',
        'entrada',
        'saida',
        'foto',
        'telefone_1',
        'telefone_2',
        'cargo',
        'condominio_id',
        //'empresa_id',
    ];

    /*public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }*/
    
    public function condominio()
    {
        return $this->belongsTo(Condominio::class, 'condominio_id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
    
}

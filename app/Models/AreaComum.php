<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaComum extends Model
{
    public $table = 'areas_comuns';

    public $fillable = [
        'nome',
        'abertura',
        'fechamento',
        'status',
        'descricao',
        'observacoes',
        'condominio_id'
    ];

    public function condominio()
    {
        return $this->belongsTo(Condominio::class, 'condominio_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'area_comum_id', 'id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }

    public function imagens()
    {
        return $this->hasMany(ImagemDaEntidade::class, 'parent_id', 'id')->where('parent_class', self::class);
    }
}

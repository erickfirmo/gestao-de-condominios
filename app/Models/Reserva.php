<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $table = 'reservas';

    public $fillable = [
        'observacoes',
        'inicio',
        'termino',
        'status',
        'area_comum_id',
        'morador_id',
        'funcionario_id',
    ];

    public function area_comum()
    {
        return $this->belongsTo(AreaComum::class, 'area_comum_id');
    }

    public function morador()
    {
        return $this->belongsTo(Morador::class, 'morador_id');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
}

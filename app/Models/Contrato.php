<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public $table = 'contratos';

    public $fillable = [
        'parcelas',
        'total_liquido',
        'observacoes',
        'empresa_id',
        'plano_id',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function plano()
    {
        return $this->belongsTo(Empresa::class, 'plano_id');
    }

    public function faturas()
    {
        return $this->hasMany(Fatura::class, 'contrato_id', 'id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
}

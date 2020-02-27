<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public $table = 'contratos';

    public $fillable = [
        'parcelas',
        'total_liquido',
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
}

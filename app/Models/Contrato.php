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
}

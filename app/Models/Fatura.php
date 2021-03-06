<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    public $table = 'faturas';

    public $fillable = [
        'total_a_pagar',
        'contrato_id',
    ];

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }
}

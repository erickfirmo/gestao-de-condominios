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
        'user_id',
    ];

    public function area_comum()
    {
        return $this->belongsTo(AreaComum::class, 'area_comum_id');
    }
}

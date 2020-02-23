<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $table = 'reservas';

    public $fillable = [
        'area_comum_id',
        'morador_id',
        'user_id',
        'observacoes',
        'inicio',
        'termino',
        'status',
    ];
}

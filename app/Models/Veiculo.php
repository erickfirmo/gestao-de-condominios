<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public $table = 'veiculos';

    public $fillable = [
        'modelo',
        'tipo',
        'placa',
        'imovel_id',
        'morador_responsavel_id',
    ];
}

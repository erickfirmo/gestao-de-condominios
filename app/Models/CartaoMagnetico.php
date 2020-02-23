<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartaoMagnetico extends Model
{
    public $table = 'cartoes_magneticos';

    public $fillable = [
        'categoria',
        'codigo',
        'responsavel_id',
        'status',
    ];
}

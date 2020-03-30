<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    public $table = 'ufs';

    public $fillable = [
        'sigla',
        'estado',
    ];

    public function condominios()
    {
        return $this->hasMany(Condominio::class, 'uf_id', 'id');
    }
}

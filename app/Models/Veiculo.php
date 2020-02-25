<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public $table = 'veiculos';

    public $fillable = [
        'modelo',
        'tipo',
        'cor',
        'descricao',
        'placa',
        'morador_id',
    ];

    public function morador()
    {
        return $this->belongsTo(Morador::class, 'morador_id');
    }
}

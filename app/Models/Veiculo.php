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
        'parent_id',
        'parent_table',
    ];

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }
}

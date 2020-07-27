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
    ];

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }

    public function imagens()
    {
        return $this->hasMany(ImagemDaEntidade::class, 'parent_id', 'id')->where('parent_class', self::class);
    }
}

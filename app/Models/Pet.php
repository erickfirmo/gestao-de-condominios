<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $table = 'pets';

    public $fillable = [
        'nome',
        'especie',
        'raca',
        'cor',
        'descricao',
        'morador_id',
    ]; 

    public function morador()
    {
        return $this->belongsTo(Morador::class, 'morador_id');
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class, 'parent_id');
    }

    public function imagens()
    {
        return $this->hasMany(ImagemDaEntidade::class, 'parent_id', 'id')->where('parent_class', self::class);
    }
}

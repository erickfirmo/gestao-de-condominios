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
}

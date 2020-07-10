<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagemDaEntidade extends Model
{
    public $table = 'imagens_das_entidades';

    public $fillable = [
        'imagem_id',
        'parent_id',
        'parent_class'
    ];

    public function imagem()
    {
        return $this->belongsTo(Imagem::class, 'imagem_id');
    }

    public function parent()
    {
        return $this->belongsTo($this->fillable['parent_class'], 'parent_id');
    }

}


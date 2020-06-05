<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    public $table = 'imagens';

    public $fillable = [
        'orginal_name',
        'name',
        'extensao',
        'size',
    ];
}

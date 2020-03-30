<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FuncionarioDoCondominio extends Pivot
{
    public $table = 'funcionarios_dos_condominios';

    public $fillable = [
        'funcionario_id',
        'condominio_id',
    ];
}

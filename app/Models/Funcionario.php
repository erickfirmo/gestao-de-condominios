<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $table = 'funcionarios';

    public $fillable = [
        'nome_completo',
        'identidade',
        'genero',
        'servico_temporario',
        'duracao',
        'inicio',
        'finalizacao',
        'foto',
        'telefone_1',
        'telefone_2',
        'jornada_semanal',
        'carga_horaria',
        'empresa_id',
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class, 'funcionario_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'funcionario_id');
    }
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
=======
>>>>>>> fd6e6400daf35c195fd54ee7d519a7ea9e995bec

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'funcionario_id');
    }
<<<<<<< HEAD

    public function condominios()
    {
        return $this->belongsToMany(FuncionarioDoCondominio::class);
    }
>>>>>>> Stashed changes
=======
>>>>>>> fd6e6400daf35c195fd54ee7d519a7ea9e995bec
}

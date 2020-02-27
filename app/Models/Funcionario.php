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

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'funcionario_id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'funcionario_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'funcionario_id');
    }

    public function pets()
    {
        return $this->hasMany(Pet::class, 'funcionario_id');
    }

    public function visitantes()
    {
        return $this->hasMany(Visitante::class, 'funcionario_id');
    }

    public function entregas()
    {
        return $this->hasMany(Entrega::class, 'funcionario_id');
    }

    public function ocorrencias()
    {
        return $this->hasMany(Ocorrencia::class, 'funcionario_id');
    }

    public function vagas()
    {
        return $this->hasMany(Vagas::class, 'funcionario_id');
    }

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'funcionario_id');
    }
}

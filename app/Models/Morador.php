<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    public $table = 'moradores';

    public $fillable = [
        'nome',
        'genero',
        'observacoes',
        'proprietario',
        'imovel_id',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

    public function imovel()
    {
        return $this->belongsTo(Imovel::class, 'imovel_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'morador_id', 'id');
    }

    public function pets()
    {
        return $this->hasMany(Pet::class, 'morador_id', 'id');
    }

    public function visitantes()
    {
        return $this->hasMany(Pet::class, 'morador_id', 'id');
    }

    public function entregas()
    {
        return $this->hasMany(Entrega::class, 'morador_id', 'id');
    }

    public function ocorrencias()
    {
        return $this->hasMany(Ocorrencia::class, 'morador_id', 'id');
    }

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'morador_id', 'id');
    }

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'morador_id', 'id');
    }
}

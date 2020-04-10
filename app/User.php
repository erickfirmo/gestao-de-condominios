<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Notifications\User\ResetPasswordNotification;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guard = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'identidade',
        'genero',
        'entrada',
        'saida',
        'foto',
        'telefone_1',
        'telefone_2',
        'cargo',
        'password',
        'foto',
        'condominio_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function condominio()
    {
        return $this->belongsTo(\App\Models\Condominio::class, 'condominio_id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    public $table = 'permission_role';

    public $timestamps = false;

    public $fillable = [
        'role_id',
        'permission_id',
    ];
}

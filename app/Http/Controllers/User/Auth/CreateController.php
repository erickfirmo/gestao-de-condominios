<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Role;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function create()
    {
        $roles = Auth::user()->role_id == 1 ? Role::all() : Role::where('id', '==', 1);

        return view('user.acessos.usuarios.create', [ 'roles' => $roles ]);
    }

}

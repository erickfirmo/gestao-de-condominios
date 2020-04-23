<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Role;

class ShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('user.acessos.usuarios.show', [ 'user' => $user ]);
    }

}

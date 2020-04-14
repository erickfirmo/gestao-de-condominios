<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function create()
    {
        return view('user.acessos.usuarios.create');
    }

}

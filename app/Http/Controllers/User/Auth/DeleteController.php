<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class DeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuário removido com sucesso!');
    }

}

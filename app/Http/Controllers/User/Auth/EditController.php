<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\User;
use App\Models\Role;

class EditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function edit($id)
    {
        if($id == Auth::user()->id) {
            return redirect()->route('usuarios.minha-conta');
        }
    }

    public function minhaConta()
    {
        return view('user.acessos.usuarios.minha-conta', [
            'roles' => Role::all(),
        ]);
    }

    public function update(UserRequest $request, $id)
    {        

        //dd(strlen($request->telefone_1));
        $request->validated();

        $user = User::findOrFail($id)->update([
            'name' => $request->nome,
            'identidade' => $request->identidade,
            'genero' => $request->genero,
            'entrada' => $request->entrada,
            'saida' => $request->saida,
            'telefone_1' => $request->telefone_1,
            'telefone_2' => $request->telefone_2,
            'cargo' => $request->cargo,
            'password' => bcrypt($request->password),
            'foto' => $request->foto_de_perfil,
        ]);

        return redirect()->route('usuarios.edit', compact('user'))
            ->with('success', 'Informações do usuário alteradas com sucesso!');
    }

}

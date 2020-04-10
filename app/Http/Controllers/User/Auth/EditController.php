<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class EditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function edit($id)
    {
        if($id == Auth::user()->id)
            return view('user.auth.edit', ['user' => User::findOrfail($id)]);
        else
            return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:255|string',
            'identidade' => 'required|min:1|max:11|unique:users,id,'.$this->route('id'),
            'genero' => 'required|in:Masculino,Feminino,Não Definido',
            'entrada' => 'required|min:1|max:30',
            'saida' => 'required|min:1|max:30',
            'telefone_1' => 'required|min:1|max:11',
            'telefone_2' => 'min:1|max:11',
            'cargo' => 'required|min:1|max:30',
            'password' => 'required|min:6|max:255|string',
            'foto' => ['max:255'],
        ]);

        $user = User::findOrFail($id)->update([
            'name' => $request->name,
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

        return redirect()->route('edit', compact('user'))
            ->with('success', 'Informações alteradas com sucesso!');
    }

}

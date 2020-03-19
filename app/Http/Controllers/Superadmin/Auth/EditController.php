<?php

namespace App\Http\Controllers\Superadmin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Superadmin;

class EditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

    public function edit($id)
    {
        if($id == Auth::user()->id)
            return view('superadmin.auth.edit', ['superadmin' => Superadmin::findOrfail($id)]);
        else
            return redirect()->route('superadmin.home');

    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required|min:2|max:255|string',
            'password' => 'required|min:6|max:255|string',
            'foto_de_perfil' => 'required|min:8|max:255|string'
        ]);

        $admin = Superadmin::findOrFail($id)->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'foto_de_perfil' => $request->foto_de_perfil,
        ]);

        return redirect()->route('superadmin.edit', compact('superadmin'))
            ->with('success', 'Informações alteradas com sucesso!');

        
    }

}

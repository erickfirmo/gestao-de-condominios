<?php

namespace App\Http\Controllers\Auth;

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
            'password' => 'required|min:6|max:255|string',
        ]);

        $user = User::findOrFail($id)->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('edit', compact('user'))
            ->with('success', 'Informações alteradas com sucesso!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:superadmin');
    }   

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastros.funcionarios.index', [
            'funcionarios' => Funcionario::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.funcionarios.create', [
            'condominios' => Condominio::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:2|max:80',
        ]);

        $nome = $request->input('nome');

        $funcionario = new Funcionario;
        $funcionario->nome = $nome;
        $funcionario->save();

        return redirect()->route('superadmin.funcionarios.edit', compact('funcionario'))
            ->with('success', 'Funcionario cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cadastros.funcionarios.show', [
            'funcionario' => Funcionario::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cadastros.funcionarios.edit', [
            'funcionario' => Funcionario::findOrFail($id),
            'condominios' => Condominio::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|min:2|max:80',
        ]);

        $funcionario = Funcionario::findOrFail($id)->update([
            'nome' => $request->nome,
        ]);

        return redirect()->route('superadmin.funcionarios.edit', compact('funcionario'))
            ->with('success', 'Dados do funcionário atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Funcionario::findOrFail($id)->delete();

        return redirect()->route('superadmin.funcionarios.index')
            ->with('success', 'Funcionário removido com sucesso!');
    }
}

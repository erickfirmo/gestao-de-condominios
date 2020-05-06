<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FuncionarioRequest;
use App\Models\Condominio;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Auth;

class FuncionarioController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:user');
    }   

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.cadastros.funcionarios.index', [
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
        return view('user.cadastros.funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\FuncionarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncionarioRequest $request)
    {
        $request->validated();

        $nome_completo = $request->input('nome_completo');
        $identidade = $request->input('identidade');
        $genero = $request->input('genero');
        $entrada = $request->input('entrada');
        $saida = $request->input('saida');
        $foto = $request->input('foto');
        $telefone_1 = $request->input('telefone_1');
        $telefone_2 = $request->input('telefone_2');
        $cargo = $request->input('cargo');

        $condominio_id = Auth::user()->condominio->id;

        $funcionario = new Funcionario;
        $funcionario->nome_completo = $nome_completo;
        $funcionario->identidade = $identidade;
        $funcionario->genero = $genero;
        $funcionario->entrada = $entrada;
        $funcionario->saida = $saida;
        $funcionario->foto = $foto;
        $funcionario->telefone_1 = $telefone_1;
        $funcionario->telefone_2 = $telefone_2;
        $funcionario->cargo = $cargo;
        $funcionario->condominio_id = $condominio_id;

        $funcionario->save();
        
        return redirect()->route('funcionarios.edit', compact('funcionario'))
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
        return view('user.cadastros.funcionarios.show', [
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
        return view('user.cadastros.funcionarios.edit', [
            'funcionario' => Funcionario::findOrFail($id),
            'condominios' => Condominio::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\FuncionarioRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FuncionarioRequest $request, $id)
    {
        $request->validated();

        $funcionario = Funcionario::findOrFail($id)->update([
            'nome_completo' => $request->nome_completo,
            'identidade' => $request->identidade,
            'genero' => $request->genero,
            'entrada' => $request->entrada,
            'saida' => $request->saida,
            'telefone_1' => $request->telefone_1,
            'telefone_2' => $request->telefone_2,
            'cargo' => $request->cargo,
        ]);

        return redirect()->route('funcionarios.edit', compact('funcionario'))
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

        return redirect()->route('funcionarios.index')
            ->with('success', 'Funcionário removido com sucesso!');
    }
}

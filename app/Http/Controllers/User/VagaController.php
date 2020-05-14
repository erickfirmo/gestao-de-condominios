<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VagaRequest;
use App\Models\Vaga;

class VagaController extends Controller
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
        return view('user.cadastros.vagas.index', [
            'vagas' => Vaga::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.vagas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\VagaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VagaRequest $request)
    {
        $request->validated();

        $modelo = $request->input('modelo');
        $tipo = $request->input('tipo');
        $cor = $request->input('cor');
        $descricao = $request->input('descricao');
        $placa = $request->input('placa');
        $morador_id = $request->input('morador_id');
        $funcionario_id = Auth::user()->id;

        $vaga = new Vaga;
        $vaga->modelo = $modelo;
        $vaga->tipo = $tipo;
        $vaga->cor = $cor;
        $vaga->descricao = $descricao;
        $vaga->placa = $placa;
        $vaga->morador_id = $morador_id;
        $vaga->funcionario_id = $funcionario_id;

        $vaga->save();

        return redirect()->route('vagas.edit', compact('vaga'))
            ->with('success', 'Vaga cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.vagas.show', [
            'vaga' => Vaga::findOrFail($id)
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
        return view('user.cadastros.vagas.edit', [
            'vaga' => Vaga::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\VagaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VagaRequest $request, $id)
    {
        $request->validated();

        $vaga = Vaga::findOrFail($id)->update([
            'modelo' => $request->modelo,
            'tipo' => $request->tipo,
            'cor' => $request->cor,
            'descricao' => $request->descricao,
            'placa' => $request->placa,
            'morador_id' => $request->morador_id,
        ]);

        return redirect()->route('vagas.edit', compact('vaga'))
            ->with('success', 'Dados do vaga atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vaga::findOrFail($id)->delete();

        return redirect()->route('vagas.index')
            ->with('success', 'Vaga removido com sucesso!');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VeiculoRequest;
use App\Models\Veiculo;

class VeiculoController extends Controller
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
        return view('user.cadastros.veiculos.index', [
            'veiculos' => Veiculo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\VeiculoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VeiculoRequest $request)
    {
        $request->validated();

        $modelo = $request->input('modelo');
        $tipo = $request->input('tipo');
        $cor = $request->input('cor');
        $descricao = $request->input('descricao');
        $placa = $request->input('placa');
        $morador_id = $request->input('morador_id');
        $funcionario_id = Auth::user()->id;

        $veiculo = new Veiculo;
        $veiculo->modelo = $modelo;
        $veiculo->tipo = $tipo;
        $veiculo->cor = $cor;
        $veiculo->descricao = $descricao;
        $veiculo->placa = $placa;
        $veiculo->morador_id = $morador_id;
        $veiculo->funcionario_id = $funcionario_id;

        $veiculo->save();

        return redirect()->route('veiculos.edit', compact('veiculo'))
            ->with('success', 'Veículo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.veiculos.show', [
            'veiculo' => Veiculo::findOrFail($id)
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
        return view('user.cadastros.veiculos.edit', [
            'veiculo' => Veiculo::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\VeiculoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VeiculoRequest $request, $id)
    {
        $request->validated();

        $veiculo = Veiculo::findOrFail($id)->update([
            'modelo' => $request->modelo,
            'tipo' => $request->tipo,
            'cor' => $request->cor,
            'descricao' => $request->descricao,
            'placa' => $request->placa,
            'morador_id' => $request->morador_id,
        ]);

        return redirect()->route('veiculos.edit', compact('veiculo'))
            ->with('success', 'Dados do veículo atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Veiculo::findOrFail($id)->delete();

        return redirect()->route('veiculos.index')
            ->with('success', 'Veículo removido com sucesso!');
    }
}

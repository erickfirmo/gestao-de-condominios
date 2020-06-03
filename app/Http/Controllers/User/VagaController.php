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

        $identificacao = $request->input('identificacao');
        $observacoes = $request->input('observacoes');
        $morador_id = $request->input('morador_id');
        
        $vaga = new Vaga;
        $vaga->identificacao = $identificacao;
        $vaga->observacoes = $observacoes;
        $vaga->morador_id = $morador_id;

        $vaga->save();

        return redirect()->route('vagas.edit', compact('vaga'))
            ->with('success', 'Vaga cadastrada com sucesso!');
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
            'identificacao' => $request->identificacao,
            'observacoes' => $request->observacoes,
            'morador_id' => $request->morador_id,
        ]);

        return redirect()->route('vagas.edit', compact('vaga'))
            ->with('success', 'Informações da vaga atualizados com sucesso!');
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
            ->with('success', 'Vaga removida com sucesso!');
    }
}

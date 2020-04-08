<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AreaComumRequest;
use App\Models\AreaComum;
use Illuminate\Support\Facades\Auth;

class AreaComumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.cadastros.areas-comuns.index', [
            'areas_comuns' => AreaComum::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.areas-comuns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaComumRequest $request)
    {
        $request->validated();

        $nome = $request->input('nome');
        $abertura = $request->input('abertura');
        $fechamento = $request->input('fechamento');
        $status = $request->input('status');
        $descricao = $request->input('descricao');
        $observacoes = $request->input('observacoes');
        $condominio_id = Auth::user()->funcionario->condominio->id;

        $area_comum = new AreaComum;
        $area_comum->nome = $nome;
        $area_comum->abertura = $abertura;
        $area_comum->fechamento = $request->input('fechamento');
        $area_comum->status = $request->input('status');
        $area_comum->descricao = $request->input('descricao');
        $area_comum->observacoes = $request->input('observacoes');
        $area_comum->condominio_id = $condominio_id;

        $area_comum->save();

        return redirect()->route('areas-comuns.edit', compact('area_comum'))
            ->with('success', 'Área comum cadastrada com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.areas-comuns.show', [
            'area_comum' => AreaComum::findOrFail($id)
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
        return view('user.cadastros.areas-comuns.edit', [
            'area_comum' => AreaComum::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaComumRequest $request, $id)
    {
        $request->validated();

        $area_comum = AreaComun::findOrFail($id)->update([
            'nome' => $request->nome,
            'abertura' => $request->abertura,
            'fechamento' => $request->fechamento,
            'status' => $request->status,
            'descricao' => $request->descricao,
            'observacoes' => $request->observacoes
        ]);

        return redirect()->route('areas-comuns.edit', compact('area_comum'))
            ->with('success', 'Dados da área comum atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AreaComum::findOrFail($id)->delete();

        return redirect()->route('areas-comuns.index')
            ->with('success', 'Área comum removida com sucesso!');
    }
}

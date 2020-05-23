<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MoradorRequest;
use App\Models\Imovel;
use App\Models\Morador;

class MoradorController extends Controller
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
        return view('user.cadastros.moradores.index', [
            'moradores' => Morador::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.moradores.create', [
            'imoveis' => Imovel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\MoradorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MoradorRequest $request)
    {
        $request->validated();

        $nome = $request->input('nome');
        $genero = $request->input('genero');
        $observacoes = $request->input('observacoes');
        $proprietario = $request->input('proprietario');
        $imovel_id = $request->input('imovel_id');

        $morador = new Morador;
        $morador->nome = $nome;
        $morador->genero = $genero;
        $morador->observacoes = $observacoes;
        $morador->proprietario = $proprietario;
        $morador->imovel_id = $imovel_id;
        $morador->save();

        return redirect()->route('moradores.edit', compact('morador'))
            ->with('success', 'Morador cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.moradores.show', [
            'morador' => Morador::findOrFail($id)
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
        return view('user.cadastros.moradores.edit', [
            'morador' => Morador::findOrFail($id),
            'imoveis' => Imovel::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\MoradorRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MoradorRequest $request, $id)
    {
        $request->validated();

        $morador = Morador::findOrFail($id)->update([
            'nome' => $request->nome,
            'genero' => $request->genero,
            'observacoes' => $request->observacoes,
            'proprietario' => $request->proprietario,
            'imovel_id' => $request->imovel_id
        ]);

        return redirect()->route('moradores.edit', compact('morador'))
            ->with('success', 'Informações do imóvel atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Morador::findOrFail($id)->delete();

        return redirect()->route('moradores.index')
            ->with('success', 'Morador removido com sucesso!');
    }
}

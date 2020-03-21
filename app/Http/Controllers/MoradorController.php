<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\Morador;

class MoradorController extends Controller
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
        return view('cadastros.moradores.index', [
            'morador' => Morador::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.moradores.create', [
            'imoveis' => Imovel::all()
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
            'genero' => 'required|min:2|max:4',
            'observacoes' => 'max:400',
            'proprietario' => 'required',
            'imovel_id' => 'required|min:1|max:20'
        ]);

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

        return redirect()->route('superadmin.moradores.edit', compact('morador'))
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
        return view('cadastros.moradores.show', [
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
        return view('cadastros.moradores.edit', [
            'morador' => Morador::findOrFail($id),
            'imoveis' => Imovel::all()
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
            'genero' => 'required|min:2|max:4',
            'observacoes' => 'max:400',
            'proprietario' => 'required',
            'imovel_id' => 'required|min:1|max:20'
        ]);

        $morador = Morador::findOrFail($id)->update([
            'nome' => $request->nome,
            'genero' => $request->genero,
            'observacoes' => $request->observacoes,
            'proprietario' => $request->proprietario,
            'imovel_id' => $request->imovel_id
        ]);

        return redirect()->route('superadmin.moradores.edit', compact('morador'))
            ->with('success', 'Dados do imóvel atualizados com sucesso!');
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

        return redirect()->route('superadmin.moradores.index')
            ->with('success', 'Morador removido com sucesso!');
    }
}

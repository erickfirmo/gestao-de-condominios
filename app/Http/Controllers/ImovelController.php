<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;
use App\Models\Imovel;

class ImovelController extends Controller
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
        return view('cadastros.imoveis.index', [
            'imoveis' => Imovel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.imoveis.create', [
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
            'numero' => 'required|min:1|max:20',
            'bloco' => 'required|min:1|max:10',
            'andar' => 'required|min:1|max:3',
            'descricao' => 'max:200',
            'observacoes' => 'max:200',
            'condominio_id' => 'required|min:1|max:20',
        ]);

        $numero = $request->input('numero');
        $bloco = $request->input('bloco');
        $andar = $request->input('andar');
        $descricao = $request->input('descricao');
        $observacoes = $request->input('observacoes');
        $condominio_id = $request->input('condominio_id');
        
        $imovel = new Imovel;
        $imovel->numero = $numero;
        $imovel->bloco = $bloco;
        $imovel->andar = $andar;
        $imovel->descricao = $descricao;
        $imovel->observacoes = $observacoes;
        $imovel->condominio_id = $condominio_id;

        $imovel->save();

        return redirect()->route('superadmin.imoveis.edit', compact('imovel'))
            ->with('success', 'Imóvel cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cadastros.imoveis.show', [
            'imovel' => Imovel::findOrFail($id)
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
        return view('cadastros.imoveis.edit', [
            'imovel' => Imovel::findOrFail($id),
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
            'e' => 'required|min:1|max:60|unique:es,e,'.$id,
        ]);

        $imovel = Imovel::findOrFail($id)->update([
            'e' => $request->e,
        ]);

        return redirect()->route('superadmin.imoveis.edit', compact('imovel'))
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
        Imovel::findOrFail($id)->delete();

        return redirect()->route('superadmin.imoveis.index')
            ->with('success', 'Imóvel removido com sucesso!');
    }
}

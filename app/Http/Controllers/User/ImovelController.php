<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Condominio;
use App\Models\Imovel;
use Illuminate\Support\Facades\Auth;
use App\Models\Uf;


class ImovelController extends Controller
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

        return view('user.cadastros.imoveis.index', [
            'imoveis' => Imovel::all(),
            'ufs' => Uf::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.imoveis.create', [
            'ufs' => Uf::all(),
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
        $request->validated();

        $numero = $request->input('numero');
        $bloco = $request->input('bloco');
        $andar = $request->input('andar');
        $descricao = $request->input('descricao');
        $observacoes = $request->input('observacoes');
        //$condominio_id = $request->input('condominio_id');
        $condominio_id = Auth::user()->funcionario->condominio->id;

        
        $imovel = new Imovel;
        $imovel->numero = $numero;
        $imovel->bloco = $bloco;
        $imovel->andar = $andar;
        $imovel->descricao = $descricao;
        $imovel->observacoes = $observacoes;
        $imovel->condominio_id = $condominio_id;

        $imovel->save();

        return redirect()->route('imoveis.edit', compact('imovel'))
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
        return view('user.cadastros.imoveis.show', [
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
        return view('user.cadastros.imoveis.edit', [
            'imovel' => Imovel::findOrFail($id),
            'condominios' => Condominio::all(),
            'ufs' => Uf::all(),
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
        $request->validated();

        $condominio_id = Auth::user()->funcionario->condominio->id;

        $imovel = Imovel::findOrFail($id)->update([
            'numero' => $request->numero,
            'bloco' => $request->bloco,
            'andar' => $request->andar,
            'descricao' => $request->descricao,
            'observacoes' => $request->observacoes,
            'condominio_id' => $condominio_id,
        ]);

        return redirect()->route('imoveis.edit', compact('imovel'))
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

        return redirect()->route('imoveis.index')
            ->with('success', 'Imóvel removido com sucesso!');
    }
}

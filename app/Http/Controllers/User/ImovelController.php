<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImovelRequest;
use App\Models\Condominio;
use App\Models\Imovel;
use Illuminate\Support\Facades\Auth;
use App\Models\Uf;
use App\Models\Imagem;

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
        $condominios = Condominio::all();
        $imoveis = Imovel::all();
        $ufs = Uf::all();

        return view('user.cadastros.imoveis.index', [
            'condominios' => $condominios,
            'imoveis' => $imoveis,
            'ufs' => $ufs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ImovelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImovelRequest $request)
    {
        $request->validated();

        $numero = $request->input('numero');
        $bloco = $request->input('bloco');
        $andar = $request->input('andar');
        $descricao = $request->input('descricao');
        $observacoes = $request->input('observacoes');
        $condominio_id = Auth::user()->condominio->id;
        
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
        $condominios = Condominio::all();
        $imovel = Imovel::with('imagens')->find($id);
        $ufs = Uf::all();

        //dd($imovel->imagens()->get()[0]);
 
        return view('user.cadastros.imoveis.edit', [
            'imovel' => $imovel,
            'ufs' => $ufs,
            'images' => Imagem::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ImovelRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImovelRequest $request, $id)
    {
        $request->validated();

        $condominio_id = Auth::user()->condominio->id;

        $imovel = Imovel::findOrFail($id)->update([
            'numero' => $request->numero,
            'bloco' => $request->bloco,
            'andar' => $request->andar,
            'descricao' => $request->descricao,
            'observacoes' => $request->observacoes,
            'condominio_id' => $condominio_id,
        ]);

        return redirect()->route('imoveis.edit', compact('imovel'))
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
        Imovel::findOrFail($id)->delete();

        return redirect()->route('imoveis.index')
            ->with('success', 'Imóvel removido com sucesso!');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CondominioRequest;
use App\Models\Condominio;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;

class CondominioController extends Controller
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

        $condominios = Condominio::where('empresa_id', Auth::user()->empresa_id);

        return view('user.cadastros.condominios.index', [
            'condominios' => $condominios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominios = Condominio::where('empresa_id', Auth::user()->empresa_id);

        return view('user.cadastros.condominios.create', [
            'condominios' => $condominios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CondominioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CondominioRequest $request)
    {
        $request->validated();
            
        $nome = $request->input('nome');
        $descricao = $request->input('descricao');
        $cep = $request->input('cep');
        $logradouro = $request->input('logradouro');
        $numero = $request->input('numero');
        $bairro = $request->input('bairro');
        $cidade = $request->input('cidade');
        $uf_id = $request->input('uf_id');
        $complemento = $request->input('complemento');
        $observacoes = $request->input('observacoes');
        $empresa_id = Auth::user()->empresa_id;

        $condominio = new Condominio;
        $condominio->nome = $nome;
        $condominio->descricao = $descricao;
        $condominio->cep = $cep;
        $condominio->logradouro = $logradouro;
        $condominio->numero = $numero;
        $condominio->bairro = $bairro;
        $condominio->cidade = $cidade;
        $condominio->uf_id = $uf_id;
        $condominio->complemento = $complemento;
        $condominio->observacoes = $observacoes;
        $condominio->empresa_id = $empresa_id;
        $condominio->save();

        return redirect()->route('condominios.edit', compact('condominio'))
            ->with('success', 'Condomínio cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.condominios.show', [
            'condominio' => Condominio::findOrFail($id)
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
        return view('user.cadastros.condominios.edit', [
            'condominio' => Condominio::findOrFail($id),
            'empresas' => Empresa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CondominioRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CondominioRequest $request, $id)
    {
        $request->validated();

        $condominio = Condominio::findOrFail($id)->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf_id' => $request->uf_id,
            'complemento' => $request->complemento,
            'observacoes' => $request->observacoes,
            'empresa_id' => Auth::user()->empresa_id
        ]);

        return redirect()->route('condominios.edit', compact('condominio'))
            ->with('success', 'Informações do condomínio atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Condominio::findOrFail($id)->delete();

        return redirect()->route('condominios.index')
            ->with('success', 'Condomínio removido com sucesso!');
    }
}

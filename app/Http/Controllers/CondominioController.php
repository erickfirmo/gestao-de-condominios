<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;

class CondominioController extends Controller
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
        return view('cadastros.condominios.index', [
            'condominios' => Condominio::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.condominios.create');
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
            'nome' => 'required|min:1|max:60|unique:condominios',
            'descricao' => 'required|min:1|max:60',
            'cep' => 'required|digits:18',
            'logradouro' => 'required|min:3|max:40|',
            'numero' => 'required|min:8|max:20',
            'bairro' => 'min:8|max:20',
            'cidade' => 'required|min:1|max:50',
            'uf_id' => 'required|min:1|max:50',
            'complemento' => 'required|min:1|max:50',
            'observacoes' => 'required|min:1|max:50',
            'empresa_id' => 'required|min:1|max:50',
        ]);

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
        $empresa_id = $request->input('empresa_id');

        
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

        return redirect()->route('superadmin.condominios.edit', compact('condominio'))
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
        return view('cadastros.condominios.show', [
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
        return view('cadastros.condominios.edit', [
            'condominio' => Condominio::findOrFail($id)
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
            'razao_social' => 'required|min:1|max:60|unique:condominios,razao_social,'.$id,
            'nome_fantasia' => 'required|min:1|max:60',
            'cnpj' => 'required|unique:condominios,cnpj,'.$id,
            'email' => 'required|min:3|max:40|',
            'telefone_1' => 'required|min:8|max:20',
            'telefone_2' => 'min:8|max:20',
            'responsavel_para_contato' => 'required|min:1|max:50',
        ]);

        $condominio = Condominio::findOrFail($id)->update([
            'razao_social' => $request->razao_social,
            'nome_fantasia' => $request->nome_fantasia,
            'cnpj' => $request->cnpj,
            'email' => $request->email,
            'telefone_1' => $request->telefone_1,
            'telefone_2' => $request->telefone_2,
            'responsavel_para_contato' => $request->responsavel_para_contato,
        ]);

        return redirect()->route('superadmin.condominios.edit', compact('condominio'))
            ->with('success', 'Dados da condominio atualizados com sucesso!');
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

        return redirect()->route('superadmin.condominios.index')
            ->with('success', 'Condominio removida com sucesso!');
    }
}

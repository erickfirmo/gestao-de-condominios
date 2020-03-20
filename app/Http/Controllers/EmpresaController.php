<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
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
        return view('cadastros.empresas.index', [
            'empresas' => Empresa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.empresas.create');
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
            'razao_social' => 'required|min:1|max:60|unique:empresas',
            'nome_fantasia' => 'required|min:1|max:60',
            'cnpj' => '',
            'email',
            'telefone_1',
            'telefone_2',
            'responsavel_para_contato',
        ]);

        $razao_social = $request->input('razao_social');
        $nome_fantasia = $request->input('nome_fantasia');
        $cnpj = $request->input('cnpj');
        $email = $request->input('email');
        $telefone_1 = $request->input('telefone_1');
        $telefone_2 = $request->input('telefone_2');
        $responsavel_para_contato = $request->input('responsavel_para_contato');
        
        $empresa = new Empresa;
        $empresa->razao_social = $razao_social;
        $empresa->nome_fantasia = $nome_fantasia;
        $empresa->cnpj = $cnpj;
        $empresa->email = $email;
        $empresa->telefone_1 = $telefone_1;
        $empresa->telefone_2 = $telefone_2;
        $empresa->responsavel_para_contato = $responsavel_para_contato;
        $saved = $empresa->save();

        return view('cadastros.empresas.edit', compact('empresa'))
            ->with('success', 'Empresa cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PrestadorDeServicosRequest;
use App\Models\PrestadorDeServicos;
use Illuminate\Support\Facades\Auth;

class PrestadorDeServicosController extends Controller
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
        $prestador_de_servicos = PrestadorDeServicos::all();

        return view('user.cadastros.prestador-de-servicos.index', [ 'prestador_de_servicos' => $prestador_de_servicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.prestador-de-servicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PrestadorDeServicosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrestadorDeServicosRequest $request)
    {
        $request->validated();

        $nome = $request->nome;
        $entrada = $request->entrada;
        $saida = $request->saida;
        $identidade = $identidade;
        $morador_id = $request->morador_id;

        $prestador_de_servicos = new PrestadorDeServicos;
        $prestador_de_servicos->nome = $nome;
        $prestador_de_servicos->entrada = $entrada;
        $prestador_de_servicos->saida = $saida;
        $prestador_de_servicos->identidade = $identidade;
        $prestador_de_servicos->morador_id = $morador_id;
        $prestador_de_servicos->save();

        return redirect()->route('prestador-de-servicos.edit', compact('prestador_de_servicos'))
        ->with('success', 'Prestador De Serviços cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.prestador-de-servicos.show', [
            'prestador_de_servicos' => PrestadorDeServicos::findOrFail($id)
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
        return view('user.cadastros.prestador-de-servicos.edit', [
            'prestador_de_servicos' => PrestadorDeServicos::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PrestadorDeServicosRequest  $requestH
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrestadorDeServicosRequest $request, $id)
    {
        $request->validated();

        $prestador_de_servicos = PrestadorDeServicos::findOrFail($id)->update([
            'nome' => $request->nome,
            'entrada' => $request->descricao,
            'saida' => $request->status,
            'identidade' => $request->identidade,
            'morador_id' => $request->morador_id,
        ]);

        return redirect()->route('prestador-de-servicos.edit', compact('prestador_de_servicos'))
            ->with('success', 'Informações do Prestador de Serviços atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PrestadorDeServicos::findOrFail($id)->delete();

        return redirect()->route('prestador-de-servicos.index')
            ->with('success', 'Prestador De Serviços removido com sucesso!');
    }
}

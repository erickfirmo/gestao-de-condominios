<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VisitanteRequest;
use App\Models\Visitante;

class VisitanteController extends Controller
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
        return view('user.cadastros.visitantes.index', [
            'visitantes' => Visitante::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.visitantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\VisitanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisitanteRequest $request)
    {
        $request->validated();

        $nome = $request->input('nome');
        $entrada = $request->input('entrada');
        $saida = $request->input('saida');
        $identidade = $request->input('identidade');
        $morador_id = $request->input('morador_id');

        $visitante = new Visitante;
        $visitante->nome = $nome;
        $visitante->entrada = $entrada;
        $visitante->saida = $saida;
        $visitante->identidade = $identidade;
        $visitante->morador_id = $morador_id;
        $visitante->save();

        return redirect()->route('visitantes.edit', compact('visitante'))
            ->with('success', 'Visitante cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.visitantes.show', [
            'visitante' => Visitante::findOrFail($id)
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
        return view('user.cadastros.visitantes.edit', [
            'visitante' => Visitante::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\VisitanteRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VisitanteRequest $request, $id)
    {
        $request->validated();

        $visitante = Visitante::findOrFail($id)->update([
            'nome' => $request->nome,
            'entrada' => $request->entrada,
            'saida' => $request->saida,
            'identidade' => $request->identidade,
            'morador_id' => $request->morador_id
        ]);

        return redirect()->route('visitantes.edit', compact('visitante'))
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
        Visitante::findOrFail($id)->delete();

        return redirect()->route('visitantes.index')
            ->with('success', 'Visitante removido com sucesso!');
    }
}

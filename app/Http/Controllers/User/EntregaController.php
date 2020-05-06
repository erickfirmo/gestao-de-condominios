<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EntregaRequest;
use App\Models\Entrega;
use Illuminate\Support\Facades\Auth;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entregas = Entrega::all();

        return view('user.cadastros.entregas.index', [ 'entregas' => $entregas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.entregas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\EntregaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntregaRequest $request)
    {
        $request->validated();

        $nome_do_entregador = $request->nome_do_entregador;
        $descricao = $request->descricao;
        $status = $request->status;
        $user_id = Auth::user()->id;
        $morador_id = $request->morador_id;

        $entrega = new Entrega;
        $entrega->nome_do_entregador = $nome_do_entregador;
        $entrega->descricao = $descricao;
        $entrega->status = $status;
        $entrega->user_id = $user_id;
        $entrega->morador_id = $morador_id;
        $entrega->save();

        return view('user.cadastros.entregas.edit', [ 'entrega' => $entrega ])
            ->with('success', 'Entrega cadastrada com sucesso!');

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
     * @param  \Illuminate\Http\EntregaRequest  $requestH
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EntregaRequest $request, $id)
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

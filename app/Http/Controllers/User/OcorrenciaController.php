<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OcorrenciaRequest;
use App\Models\Ocorrencia;
use Illuminate\Support\Facades\Auth;

class OcorrenciaController extends Controller
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
        $ocorrencias = Ocorrencia::all();

        return view('user.cadastros.ocorrencias.index', [ 'ocorrencias' => $ocorrencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.ocorrencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\OcorrenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OcorrenciaRequest $request)
    {
        $request->validated();

        $descricao = $request->descricao;
        $status = $request->status;
        $data = $request->data;
        $hora = $request->hora;
        $gravidade = $request->gravidade;
        $morador_id = $request->morador_id;

        $ocorrencia = new Ocorrencia;
        $ocorrencia->descricao = $descricao;
        $ocorrencia->status = $status;
        $ocorrencia->data = $data;
        $ocorrencia->hora = $hora;
        $ocorrencia->gravidade = $gravidade;
        $ocorrencia->morador_id = $morador_id;
        $ocorrencia->save();

        return redirect()->route('ocorrencias.edit', compact('ocorrencia'))
            ->with('success', 'Ocorrência cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.ocorrencias.show', [
            'ocorrencia' => Ocorrencia::findOrFail($id),
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
        return view('user.cadastros.ocorrencias.edit', [
            'ocorrencia' => Ocorrencia::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\OcorrenciaRequest  $requestH
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OcorrenciaRequest $request, $id)
    {
        $request->validated();

        $ocorrencia = Ocorrencia::findOrFail($id)->update([
            'descricao' => $request->descricao,
            'status' => $request->status,
            'data' => $request->data,
            'hora' => $request->hora,
            'gravidade' => $request->gravidade,
            'morador_id' => $request->morador_id,
        ]);

        return redirect()->route('ocorrencias.edit', compact('ocorrencia'))
            ->with('success', 'Informações da ocorrência atualizadas com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ocorrencia::findOrFail($id)->delete();

        return redirect()->route('ocorrencias.index')
            ->with('success', 'Ocorrência removida com sucesso!');
    }
}

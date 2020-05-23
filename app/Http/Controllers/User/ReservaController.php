<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReservaRequest;
use App\Models\Reserva;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
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
        $reservas = Reserva::all();

        return view('user.cadastros.reservas.index', [ 'reservas' => $reservas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ReservaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservaRequest $request)
    {
        $request->validated();

        $observacoes = $request->observacoes;
        $inicio = $request->inicio;
        $termino = $request->termino;
        $status = $request->status;
        $area_comum_id = $request->area_comum_id;
        $morador_id = $request->morador_id;

        $reserva = new Reserva;
        $reserva->observacoes = $observacoes;
        $reserva->inicio = $inicio;
        $reserva->termino = $termino;
        $reserva->status = $status;
        $reserva->area_comum_id = $area_comum_id;
        $reserva->morador_id = $morador_id;
        $reserva->save();

        return redirect()->route('reservas.edit', compact('reserva'))
        ->with('success', 'Reserva cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.reservas.show', [
            'reserva' => Reserva::findOrFail($id)
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
        return view('user.cadastros.reservas.edit', [
            'reserva' => Reserva::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ReservaRequest  $requestH
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservaRequest $request, $id)
    {
        $request->validated();

        $reserva = Reserva::findOrFail($id)->update([
            'observacoes' => $request->observacoes,
            'inicio' => $request->inicio,
            'termino' => $request->termino,
            'status' => $request->status,
            'area_comum_id' => $request->area_comum_id,
            'morador_id' => $request->morador_id,
        ]);

        return redirect()->route('reservas.edit', compact('reserva'))
            ->with('success', 'Informações da reserva atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reserva::findOrFail($id)->delete();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva removida com sucesso!');
    }
}

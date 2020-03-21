<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\Morador;

class MoradorController extends Controller
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
        return view('cadastros.moradores.index', [
            'morador' => Morador::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.moradores.create', [
            'imoveis' => Imovel::all()
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
        $request->validate([
            'e' => 'required|min:1|max:20',
        ]);

        $e = $request->input('e');

        $morador = new Morador;
        $morador->e = $e;

        $morador->save();

        return redirect()->route('superadmin.moradores.edit', compact('morador'))
            ->with('success', 'Morador cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cadastros.moradores.show', [
            'morador' => Morador::findOrFail($id)
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
        return view('cadastros.moradores.edit', [
            'morador' => Morador::findOrFail($id),
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
            'e' => 'required|min:1|max:20',
        ]);

        $morador = Morador::findOrFail($id)->update([
            'e' => $request->e,
        ]);

        return redirect()->route('superadmin.moradores.edit', compact('morador'))
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
        Morador::findOrFail($id)->delete();

        return redirect()->route('superadmin.moradores.index')
            ->with('success', 'Morador removido com sucesso!');
    }
}

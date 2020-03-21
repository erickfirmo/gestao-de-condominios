<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class ImovelController extends Controller
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
        return view('cadastros.imoveis.index', [
            'imoveis' => Imovel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.imoveis.create');
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
            'e' => 'required|min:1|max:60|unique:es',
        ]);

        $e = $request->input('e');
        
        $imovel = new Imovel;
        $imovel->e = $e;
        $imovel->save();

        return redirect()->route('superadmin.imoveis.edit', compact('imovel'))
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
        return view('cadastros.imoveis.show', [
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
        return view('cadastros.imoveis.edit', [
            'imovel' => Imovel::findOrFail($id)
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
            'e' => 'required|min:1|max:60|unique:es,e,'.$id,
        ]);

        $imovel = Imovel::findOrFail($id)->update([
            'e' => $request->e,
        ]);

        return redirect()->route('superadmin.imoveis.edit', compact('imovel'))
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
        Imovel::findOrFail($id)->delete();

        return redirect()->route('superadmin.imoveis.index')
            ->with('success', 'Imóvel removida com sucesso!');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PetRequest;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
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
        $pets = Pet::all();

        return view('user.cadastros.pets.index', [ 'pets' => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.cadastros.pets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PetRequest $request)
    {
        $request->validated();

        $nome = $request->nome;
        $especie = $request->especie;
        $raca = $request->raca;
        $cor = $request->cor;
        $descricao = $request->descricao;
        $morador_id = $request->morador_id;

        $pet = new Pet;
        $pet->nome = $nome;
        $pet->especie = $especie;
        $pet->raca = $raca;
        $pet->cor = $cor;
        $pet->descricao = $descricao;
        $pet->morador_id = $morador_id;
        $pet->save();

        return redirect()->route('pets.edit', compact('pet'))
        ->with('success', 'Pet cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.cadastros.pets.show', [
            'pet' => Pet::findOrFail($id)
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
        return view('user.cadastros.pets.edit', [
            'pet' => Pet::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PetRequest  $requestH
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PetRequest $request, $id)
    {
        $request->validated();

        $pet = Pet::findOrFail($id)->update([
            'nome' => $request->nome,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'cor' => $request->cor,
            'descricao' => $request->descricao,
            'morador_id' => $request->morador_id,
        ]);

        return redirect()->route('pets.edit', compact('pet'))
            ->with('success', 'Informações do pet atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pet::findOrFail($id)->delete();

        //if status == 'Entregue' - request

        return redirect()->route('pets.index')
            ->with('success', 'Pet removido com sucesso!');
    }
}

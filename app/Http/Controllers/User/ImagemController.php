<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImagemRequest;
use App\Models\Imagem;

class ImagemController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:user');
    }

    public function index()
    {
        $imagens = Imagem::all();

        return view('user.cadastros.imagens.index', [ 'imagens' => $imagens ]);

    }

    public function upload(ImagemRequest $request)
    {
        $request->validated();

        $image = new Imagem;
        //$original_name = $requet->input('original_name');
        //$name = $requet->input('name');

        dd($request->file('images'));
        ///dd($request->file('images')->getClientOriginalExtension());

        //$image->original_name = $original_name;
        //$image->name = $name;
        //$image->save();


        
        return response()->json([
            'success' => 'Upload de imagem realizado com sucesso!',
            'image_url' => '#',
        ], 201);
    }

    public function store(ImagemRequest $request)
    {
        
    }

    public function update(ImagemRequest $request, $id)
    {
        $request->validated();

        //criar recorte de imagem

        $imagem = Imagem::findOrFail($id)->update([
            'name' => $request->name,
            'original_name' => $request->original_name,
            'extension' => $request->extension,
            'alt' => $request->alt,
            'title' => $request->title,
            'size' => $request->size,
        ]);

        return redirect()->route('imagens.edit', compact('imagem'))
            ->with('success', 'Informações da imagem atualizadas com sucesso!');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imagem::findOrFail($id)->delete();

        return redirect()->route('imagens.index')
            ->with('success', 'Imagem removida com sucesso!');
    }
}

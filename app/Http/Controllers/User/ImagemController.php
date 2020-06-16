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

        $image_files = $requet->file('images');

        $name = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('imagens'), $name);

        $image = new Imagem;

        $image->original_name = request()->image->getClientOriginalExtension();
        $image->name = $name;
        $image->extension = '.jpg';
        $image->title = 'teste1';
        $image->alt = 'teste1';
        $image->size = 200;
        $image->save();

        return response()->json([
            'status' => '200',
            'message' => 'Lorem ipsum dolor sit amet',
        ]);
    }

    public function store(ImagemRequest $request)
    {
        //$request->validated();

        /*$image = new Imagem;

        $image->original_name = 'teste';
        $image->name = 'teste';
        $image->extension = 'teste';
        $image->title = 'teste';
        $image->alt = 'teste';
        $image->size = 'teste';
        $image->save();*/

        dd('asa');

        /*$request->validated();

        


        //criar recorte de imagem

        echo json_encode(dd($image_files));

        $original_name = $requet->input('original_name');
        $name = $requet->input('name');
        $extension = $requet->input('extension');
        $alt = $requet->input('alt');
        $title = $requet->input('title');
        $size = $requet->input('size');

        $name .= time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $name);

        $imagem = new Imagem;

        $imagem->original_name = $original_name;
        $imagem->name = $name;
        $imagem->extension = $extension;
        $imagem->alt = $alt;
        $imagem->title = $title;
        $imagem->size = $size;
        $imagem->save();

        return response()->json([
            'success' => 'Upload de imagem realizado com sucesso!',
            'image_url' => '#',
        ]);*/
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

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

    public function upload(ImagemRequest $requet)
    {
        //$request->validated();

        $image_files = $requet->file('images');

        $name = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('imagens'), $name);

        return response()->json([
            'status' => 200,
            'images' => [
                '1' => ''
            ]
        ]);
    }

    public function store(ImagemRequest $requet)
    {
        $request->validated();

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
        ]);
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

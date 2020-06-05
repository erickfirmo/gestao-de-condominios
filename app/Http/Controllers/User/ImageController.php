<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:user');
    }

    public function index()
    {
        $images = Image::all();

        return view('', [ '' => $image ]);
    }

    public function store(ImageRequest $requet)
    {

        //criar recorte de imagem

        $original_name = $requet->input('original_name');
        $name = $requet->input('name');
        $extension = $requet->input('extension');
        $size = $requet->input('size');

        $image = new Image;

        $image->original_name = $original_name;
        $image->name = $name;
        $image->extension = $extension;
        $image->size = $size;
        $image->save();

        return response()->json([
            'status' => 'Imagem salva com sucesso!'
        ]);
    }

    public function update(ImageRequest $request, $id)
    {
        $request->validated();

        //criar recorte de imagem

        $image = Image::findOrFail($id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('images.edit', compact('image'))
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
        Image::findOrFail($id)->delete();

        return redirect()->route('images.index')
            ->with('success', 'Imagem removido com sucesso!');
    }
}

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
        $images = Imagem::all()->sortByDesc("id");
        return view('user.cadastros.imagens.index', [ 'images' => $images ]);

    }

    public function upload(ImagemRequest $request)
    {
        $request->validated();
        $images = $request->file('images');

        $response_images = [];
        if(!$images) {
            //return error
            /*return response()->json([
                'success' => 'Upload de imagem realizado com sucesso!',
                'image_links' => $image_links,
            ], 201);*/
        } else {
            // passing files
            foreach($images as $key => $imageFile) {
                    array_push($response_images, $this->store($imageFile));
            }

            return response()->json([
                'success' => 'Upload de imagem realizado com sucesso!',
                'uploaded_images' => $response_images,
            ], 201);
        }
    }

    public function store($imageFile)
    {
        $original_name = time() . $imageFile->getClientOriginalName();
        $image = new Imagem;
        $image->original_name = $original_name;
        $image->save();

        $imageFile->move(public_path('upload/images'), $original_name);

        $image_obj = [
            'url' => 'upload/images/'.$original_name,
            'file_name' => $original_name,
            'id' => $image->id
        ];

        return $image_obj;
    }

    public function update(ImagemRequest $request, $id)
    {
        $request->validated();

        //criar recorte de imagem

        $imagem = Imagem::findOrFail($id)->update([
            'original_name' => $request->original_name,
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
    public function delete($id)
    {
        Imagem::findOrFail($id)->delete();

        return response()->json([
            'success' => 'Imagem removida com sucesso!',
        ], 201);
    }
}

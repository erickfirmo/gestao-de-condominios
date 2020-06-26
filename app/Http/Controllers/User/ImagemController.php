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
        $image_names = [];
        
        // array names constructor
        for ($i = 0; $i < count($images); $i++) {
            if($request->has('image_name_'.$i)) {
                $image_names[$key] = $request->input('image_name_'.$i);
            }
        }

        $response_images = [];
        if(!$images) {
            //return error
            /*return response()->json([
                'success' => 'Upload de imagem realizado com sucesso!',
                'image_links' => $image_links,
            ], 201);*/
        } else {
            // passing files and fake names
            foreach($images as $key => $imageFile) {
                $image_name = array_key_exists($key, $image_names) ? $image_names[$key] : '';
                    array_push($response_images, $this->store($imageFile, $image_name));
            }

            return response()->json([
                'success' => 'Upload de imagem realizado com sucesso!',
                'images' => $response_images,
            ], 201);
        }
    }

    public function store($imageFile, $name)
    {
        $original_name = time() . $imageFile->getClientOriginalName();
        $image = new Imagem;
        $image->original_name = $original_name;
        $image->name = $name;
        $image->save();

        $imageFile->move(public_path('upload/images'), $original_name);

        $image_obj = [
            'url' => 'upload/images/'.$original_name,
            'name' => $name,
        ];

        return $image_obj;
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

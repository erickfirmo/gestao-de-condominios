<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImagemDaEntidade;

class ImagemDaEntidadeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:user');
    }

    public function upload(Request $request)
    {
        $parent_class = $request->input('parent_class');
        $parent_id = $request->input('parent_id');        
        $new_parent_images = json_decode($request->input('new_parent_images'));

        $response_images = [];

        foreach($new_parent_images as $image_id)
            array_push($response_images, $this->store($image_id, $parent_class, $parent_id));

        $response_text = count($new_parent_images) == 1 ? 'Imagem adicionada com sucesso!' : 'Imagens adicionadas com sucesso!';

        return response()->json([
            'success' => $response_text,
            'uploaded_images' => $response_images,
        ], 200);
    }

    public function store($image_id, $parent_class, $parent_id)
    {        
        $imagem_da_entidade = new ImagemDaEntidade;
        $imagem_da_entidade->parent_id = $parent_id;
        $imagem_da_entidade->parent_class = 'App\Models\\'.$parent_class;
        $imagem_da_entidade->imagem_id = $image_id;
        $imagem_da_entidade->save();
        
        return $imagem_da_entidade->id;
    }

    public function destroy(Request $request)
    {
        $id = $request->input('image_id');
        $removed_images = [];
        $imagem_da_entidade = ImagemDaEntidade::findOrFail($id);
        $imagem_da_entidade->delete();    
        array_push($removed_images, $id);

        return response()->json([
            'success' => 'Imagem removida com sucesso!',
        ], 201);
    }
}

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

    public function store(Request $request)
    {
        $new_parent_images = json_decode($request->input('new_parent_images'));
        $parent_class = $request->input('parent_class');
        $parent_id = $request->input('parent_id');

        //foreach($new_parent_images as $image_id) {
            $imagem_da_entidade = new ImagemDaEntidade;
            $imagem_da_entidade->parent_id = $request->parent_id;
            $imagem_da_entidade->parent_class = 'App\\Models\\'.$parent_class;
            $imagem_da_entidade->imagem_id = 1;
            $imagem_da_entidade->save();
        //}

        return response()->json([
            'success' => 'Imagem adicionada com sucesso!',
        ], 200);

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

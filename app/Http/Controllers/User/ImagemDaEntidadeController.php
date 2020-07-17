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

    public function destroy(Request $request)
    {
        $images_ids = $requets->input('images_ids');
        $images_ids = json_decode($images_ids);
        $removed_images = [];

        foreach($images_ids as $id)
        {
            $imagem_da_entidade = ImagemDaEntidade::findOrFail($id);
            $imagem_da_entidade->delete();    
            array_push($removed_images, $id);
        }

        $response_message =  count($images_ids) > 1 ? 'Imagens removidas com sucesso!' : 'Imagem removida com sucesso!';

        return response()->json([
            'success' => $response_message,
            'removed_images' => $removed_images,
        ], 201);
    }
}

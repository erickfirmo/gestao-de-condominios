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

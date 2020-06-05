<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $original_name = $requet->input('original_name');
        $name = $requet->input('name');
        $extension = $requet->input('extension');
        $size = $requet->input('size');


        return response()->json([
            'status' => 'Imagem salva com sucesso!'
        ]);
    }

    public function update(ImageRequest $requet)
    {
        //load images
    }

    public function destroy(ImageRequest $requet)
    {
        //load images
    }
}

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function _construct()
    {
        return $this->middleware('auth:user');
    }

    public function index()
    {
        //load images
    }
}

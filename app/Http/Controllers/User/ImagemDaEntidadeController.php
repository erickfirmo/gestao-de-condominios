<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagemDaEntidadeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:user');
    }

    public function destroy()
    {
        
    }
}

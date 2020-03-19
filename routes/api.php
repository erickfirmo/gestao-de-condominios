<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

require_once 'auth/user.php';
require_once 'auth/admin.php';
require_once 'auth/superadmin.php';


Route::prefix('superadmin')->name('superadmin.')->group(function () {
    Route::resource('empresas', 'EmpresaController');
        
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



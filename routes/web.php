<?php

Route::get('/', function () {
    return redirect('/user/login');
});

Auth::routes();



require_once 'auth/user.php';
require_once 'auth/admin.php';
require_once 'auth/superadmin.php';


Route::prefix('superadmin')->name('superadmin.')->group(function () {
    Route::resource('empresas', 'EmpresaController');
    Route::resource('condominios', 'CondominioController');

        
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

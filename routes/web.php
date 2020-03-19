<?php

Route::get('/', function () {
    return redirect('/user/login');
});

Auth::routes();



require_once 'auth/user.php';
require_once 'auth/admin.php';
require_once 'auth/superadmin.php';


Route::prefix('superadmin')->name('superadmin.')->group(function () {
    // cadastros
    Route::resource('empresas', 'EmpresaController');
    Route::resource('condominios', 'CondominioController');

    // usuarios


    // financeiros


    // portarias

        
});


Route::prefix('admin')->name('admin.')->group(function () {
    // cadastros
    Route::resource('empresas', 'EmpresaController');
    Route::resource('condominios', 'CondominioController');

    // usuarios


    // financeiros


    // portarias

        
});

// users
Route::prefix('user')->name('user.')->group(function () {
    // cadastros
    Route::prefix('user')->name('user.')->group(function () {
        // moradores
        Route::resource('moradores', 'MoradorController');
            
    });

    // usuarios


    // financeiros


    // portarias

        
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

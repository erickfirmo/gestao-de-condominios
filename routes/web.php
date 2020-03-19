<?php

Route::get('/', function () {
    return redirect('/user/login');
});

Auth::routes();



require_once 'auth/user.php';
require_once 'auth/admin.php';
require_once 'auth/superadmin.php';


Route::prefix('superadmin')->name('superadmin.')->group(function () {

    ##cadastros
    // empresas
    Route::resource('empresas', 'EmpresaController');
    // condominios
    Route::resource('condominios', 'CondominioController');
    // imoveis
    Route::resource('imoveis', 'ImovelController');
    // moradores
    Route::resource('moradores', 'MoradorController');
    // areas comuns
    Route::resource('areas-comuns', 'AreaComumController');
    // reservas
    Route::resource('reservas', 'ReservaController');
    // pets
    Route::resource('pets', 'PetController');

    ##estacionamento/garagem
    // veiculos
    Route::resource('veiculos', 'VeiculoController');
    // vagas
    Route::resource('vagas', 'VagaController');





    ##usuarios/acessos

    // usuarios


    // financeiros


    // portarias

        
});


Route::prefix('admin')->name('admin.')->group(function () {
    // cadastros

    // usuarios


    // financeiros


    // portarias

        
});

// users
Route::prefix('user')->name('user.')->group(function () {
    // cadastros

    // usuarios


    // financeiros


    // portarias

        
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

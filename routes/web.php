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
    // funcionarios
    Route::resource('funcionarios', 'FuncionarioController');
    // areas comuns
    Route::resource('areas-comuns', 'AreaComumController');
    // pets
    Route::resource('pets', 'PetController');
    // reservas
    Route::resource('reservas', 'ReservaController');

    ##estacionamento/garagem
    // veiculos
    Route::resource('veiculos', 'VeiculoController');
    // vagas
    Route::resource('vagas', 'VagaController');

    ##portarias
    // entregas
    Route::resource('entregas', 'EntregaController');
    // visitantes
    Route::resource('visitantes', 'VisitanteController');
    // prestadores de servicos
    Route::resource('prestadores-de-servicos', 'PrestadorDeServicoController');

    ##usuarios/acessos
    // usuarios
    Route::resource('acessos/users', 'Acessos/UserController');
    // administradores
    Route::resource('acessos/admins', 'Acessos/AdminController');

    ##financeiro
    // receita
    Route::resource('financeiro/receitas', 'Financeiro/ReceitaController');
    // despesas
    Route::resource('financeiro/despesas', 'Financeiro/DespesaController');
    // faturas
    Route::resource('financeiro/faturas', 'Financeiro/FaturaController');
    // boletos
    Route::resource('financeiro/boletos', 'Financeiro/BoletoController');
        
});


Route::prefix('admin')->name('admin.')->group(function () {
   ##cadastros
    // imoveis
    Route::resource('imoveis', 'ImovelController');
    // moradores
    Route::resource('moradores', 'MoradorController');
    // funcionarios
    Route::resource('funcionarios', 'FuncionarioController');
    // areas comuns
    Route::resource('areas-comuns', 'AreaComumController');
    // pets
    Route::resource('pets', 'PetController');
    // reservas
    Route::resource('reservas', 'ReservaController');

    ##estacionamento/garagem
    // veiculos
    Route::resource('veiculos', 'VeiculoController');
    // vagas
    Route::resource('vagas', 'VagaController');

    ##portarias
    // entregas
    Route::resource('entregas', 'EntregaController');
    // visitantes
    Route::resource('visitantes', 'VisitanteController');
    // prestadores de servicos
    Route::resource('prestadores-de-servicos', 'PrestadorDeServicoController');

    ##usuarios/acessos
    // usuarios
    Route::resource('acessos/users', 'Acessos/UserController');
    // administradores
    Route::resource('acessos/admins', 'Acessos/AdminController');

    ##financeiro
    // faturas
    Route::resource('financeiro/faturas', 'Financeiro/FaturaController');
        
});

// users
Route::prefix('user')->name('user.')->group(function () {
    
    ##cadastros
    // imoveis
    Route::resource('imoveis', 'ImovelController');
    // moradores
    Route::resource('moradores', 'MoradorController');
    // funcionarios
    Route::resource('funcionarios', 'FuncionarioController');
    // areas comuns
    Route::resource('areas-comuns', 'AreaComumController');
    // pets
    Route::resource('pets', 'PetController');
    // reservas
    Route::resource('reservas', 'ReservaController');

    ##estacionamento/garagem
    // veiculos
    Route::resource('veiculos', 'VeiculoController');
    // vagas
    Route::resource('vagas', 'VagaController');

    ##portarias
    // entregas
    Route::resource('entregas', 'EntregaController');
    // visitantes
    Route::resource('visitantes', 'VisitanteController');
    // prestadores de servicos
    Route::resource('prestadores-de-servicos', 'PrestadorDeServicoController');
        
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

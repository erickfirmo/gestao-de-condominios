<?php

Route::get('/', function () {
    return redirect('/user/login');
});

Auth::routes();

require_once 'auth/user.php';
require_once 'auth/admin.php';
require_once 'auth/superadmin.php';

Route::prefix('superadmin')->name('superadmin.')->namespace('Superadmin')->group(function () {

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
    Route::resource('acessos/users', 'User\Auth\EditController');
    // administradores
    Route::resource('acessos/admins', 'Admin\Auth\EditController');

    ##financeiro
    // receita
    Route::resource('financeiro/receitas', 'ReceitaController');
    // despesas
    Route::resource('financeiro/despesas', 'DespesaController');
    // faturas
    Route::resource('financeiro/faturas', 'FaturaController');
    // boletos
    Route::resource('financeiro/boletos', 'BoletoController');

    ##outros
    // reservas
    Route::resource('reservas', 'ReservaController');
    // ocorrencias
    Route::resource('ocorrencias', 'OcorrenciaController');
    // reservas
    Route::resource('relatorios', 'RelatorioController');
        
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
    Route::resource('acessos/users', 'User\Auth\EditController');
    // administradores
    Route::resource('acessos/admins', 'Admin\Auth\EditController');
        
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

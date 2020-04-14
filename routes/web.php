<?php

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

require_once 'auth/user.php';
require_once 'auth/admin.php';

Route::group(['namespace' => 'Admin',  'middleware' => 'role', 'prefix' => 'admin', 'name' => 'admin.'], function() {

    ##cadastros
    // empresas
    Route::resource('empresas', 'EmpresaController');
    // condominios
    Route::resource('condominios', 'CondominioController');
    
    ##usuarios/acessos
    // usuarios
    Route::resource('usuarios', 'Auth\EditController');
    // administradores
    Route::resource('admins', 'Auth\EditController');

    ##financeiro
    // receita
    //Route::resource('financeiro/receitas', 'ReceitaController');
    // despesas
    //Route::resource('financeiro/despesas', 'DespesaController');
    // faturas
    //Route::resource('financeiro/faturas', 'FaturaController');
    // boletos
    //Route::resource('financeiro/boletos', 'BoletoController');

    ##outros
    // relatorios
    //Route::resource('relatorios', 'RelatorioController');
    
});

Route::group(['namespace' => 'User',  'middleware' => 'role'], function() {


##cadastros
// empresas
##Route::resource('empresas', 'EmpresaController');
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
Route::get('usuarios', 'Auth\ListController@index')->name('usuarios.index');
Route::get('usuarios/{id}/edit', 'Auth\EditController@edit')->name('usuarios.edit');
Route::put('usuarios/{id}/update', 'Auth\EditController@update')->name('usuarios.update');

##financeiro
// receita
//Route::resource('financeiro/receitas', 'ReceitaController');
// despesas
//Route::resource('financeiro/despesas', 'DespesaController');
// faturas
//Route::resource('financeiro/faturas', 'FaturaController');
// boletos
//Route::resource('financeiro/boletos', 'BoletoController');

##outros
// reservas
Route::resource('reservas', 'ReservaController');
// ocorrencias
Route::resource('ocorrencias', 'OcorrenciaController');
// reservas
Route::resource('relatorios', 'RelatorioController');
    
        



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

});

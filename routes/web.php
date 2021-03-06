<?php

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/user/login', function () {
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
    //Route::resource('usuarios', 'Auth\EditController');
    // administradores
    //Route::resource('admins', 'Auth\EditController');

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

Route::group(['namespace' => 'User',  'middleware' => ['role', 'lockscreen']], function() {


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
Route::resource('prestadores-de-servicos', 'PrestadorDeServicosController');

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
// imagens
Route::resource('imagens', 'ImagemController');
Route::post('imagens/upload', 'ImagemController@upload')->name('imagens.upload');
// imagens das entidades
Route::post('imagens-das-entidades/upload', 'ImagemDaEntidadeController@upload')->name('imagens-das-entidades.upload');
Route::post('imagens-das-entidades/destroy', 'ImagemDaEntidadeController@destroy')->name('imagens-das-entidades.destroy');



Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

});



// lock screen
Route::get('lock-screen', 'User\ScreenController@lock')->name('lock-screen');
// unlock screen
Route::post('unlock-screen', 'User\ScreenController@unlock')->name('unlock-screen');

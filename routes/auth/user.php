<?php


Route::middleware('auth:user')->group(function () {
    Route::get('/', 'User\HomeController@home')->name('/');
    Route::get('home', 'User\HomeController@index')->name('home');
});

Route::prefix('usuarios')->name('usuarios.')->namespace('User')->group(function () {
    Auth::routes();
    Route::get('edit/{id}', 'Auth\EditController@edit')->name('edit');
    Route::post('update/{id}', 'Auth\EditController@update')->name('update');

    ##usuarios/acessos
    // usuarios
    Route::get('/', 'Auth\ListController@index')->name('index');
    Route::get('create', 'Auth\CreateController@create')->name('create');
    Route::get('{id}/edit', 'Auth\EditController@edit')->name('edit');
    Route::put('{id}/update', 'Auth\EditController@update')->name('update');
    Route::delete('{id}/destroy', 'Auth\DeleteController@destroy')->name('destroy');



    Route::get('/password/email', function () {
        return redirect('login');
    });
});
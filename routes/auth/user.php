<?php


Route::middleware('auth:user')->group(function () {
    Route::get('/', 'User\HomeController@home')->name('/');
    Route::get('home', 'User\HomeController@index')->name('home');
});

Route::prefix('usuarios')->name('usuarios.')->namespace('User')->group(function () {
    Auth::routes();
    Route::get('edit/{id}', 'Auth\EditController@edit')->name('edit');
    Route::post('update/{id}', 'Auth\EditController@update')->name('update');

    Route::get('/password/email', function () {
        return redirect('login');
    });
});
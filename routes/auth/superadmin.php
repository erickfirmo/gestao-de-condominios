<?php

Route::prefix('superadmin')->name('superadmin.')->namespace('superadmin')->group(function () {
    Auth::routes();
    Route::middleware('auth:superadmin')->group(function () {
        Route::get('/', 'HomeController@index')->name('/');
        Route::get('home', 'HomeController@home')->name('home');
    });
    Route::get('edit/{id}', 'Auth\EditController@edit')->name('edit');
    Route::post('update/{id}', 'Auth\EditController@update')->name('update');

    Route::get('/password/email', function () {
        return redirect('superadmin/login');
    });
});
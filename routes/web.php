<?php

Route::get('/', function () {
    return redirect('/user/login');
});

Auth::routes();

require_once 'auth/user.php';
require_once 'auth/admin.php';
require_once 'auth/superadmin.php';

Route::prefix('admin')->name('admin.')->namespace('')->group(function () {

    Route::prefix('examples')->name('examples.')->group(function () {
        Route::get('/', 'ExampleController@index')->name('index');
        Route::get('/create', 'ExampleController@create')->name('create');
        Route::get('/{id}/edit', 'ExampleController@edit')->name('edit');
        Route::post('/store', 'ExampleController@store')->name('store');
        Route::put('/{id}', 'ExampleController@update')->name('update');
        Route::delete('/{id}', 'ExampleController@destroy')->name('destroy');

    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

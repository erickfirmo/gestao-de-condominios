<?php

Route::get('/', function () {
    return redirect('/user/login');
});

Auth::routes();



Route::prefix('admin')->name('admin.')->namespace('')->group(function () {

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

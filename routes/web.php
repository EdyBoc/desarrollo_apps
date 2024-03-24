<?php

Route::get('/', function () {
    return view('login\login');
});


Route::get('index_menu', 'SistemaTurnos\RegistroController@index')->name('index_menu');
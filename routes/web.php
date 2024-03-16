<?php

Route::get('/', function () {return view('login\login');});


//Route::post('inicio', 'archivo/Controller@consultarProductos')->name('inicio');

//Route::get('inicio', 'archivo\AsignacionController@index')->name('inicio');

Auth::routes();

Route::get('index', 'SistemaTurno\AsignacionController@index')->name('index');

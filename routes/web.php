<?php

Route::get('/', function () {
    return view('index_marcaje');
});

Route::get('index_asistencia', 'SistemaTurnos\AsistenciaController@index')->name('index_asistencia');
//asingnaciones
Route::get('asignaciones', 'SistemaTurnos\AsignacionPersonaController@asignar_persona')->name('asignaciones');
Route::get('solicitud_asignaciones', 'SistemaTurnos\AsignacionPersonaController@solicitud_persona')->name('solicitud_asignaciones');
//gestiones
Route::get('gestion', 'SistemaTurnos\GestionesController@index_gestion')->name('gestion');
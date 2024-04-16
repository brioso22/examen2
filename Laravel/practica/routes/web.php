<?php

use Illuminate\Support\Facades\Route;

Route::get('/Clinica', function () {
    return view('clinica');
});

Route::get('/Ingresar', function () {
    return view('ingresar');
});

Route::get('/MostrarData', function () {
    return view('mostrar_data');
});
Route::post('/guardar-paciente', 'PacienteController@store')->name('pacientes.store');

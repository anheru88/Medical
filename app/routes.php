<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'userController@index');
Route::get('/medico/actualizar', 'UserController@actualizarMedico');
Route::get('/medico/insumos', 'UserController@insumos');
Route::get('/medico/medicamentos', 'UserController@medicamentos');
Route::get('/medico/maestro/medicamentos', 'UserController@maestroMedicamentos');
Route::get('/medico/consultas', 'UserController@consultas');
Route::get('/medico/diagnosticos', 'UserController@diagnosticos');
Route::get('/cliente/actualizar', 'UserController@actualizarCliente');
Route::get('/cliente/actualizarPaciente', 'UserController@actualizarPaciente');
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
Route::get('/medico', 'UserController@actualizarMedico');
Route::get('/maestroInsumos', 'UserController@insumos');
Route::get('/presentacionMedicamentos', 'UserController@medicamentos');
Route::get('/maestroMedicamentos', 'UserController@maestroMedicamentos');
Route::get('/ConsultasProcedimientos', 'UserController@consultas');
Route::get('/diagnosticos', 'UserController@diagnosticos');
Route::get('/tarifas', 'UserController@index');
Route::get('/clientesProgramas', 'UserController@actualizarCliente');
Route::get('/pacientes', 'UserController@actualizarPaciente');
Route::get('/especialidad', 'UserController@index');
Route::get('/cuotasCopagos', 'UserController@index');
Route::get('/cirugias', 'UserController@index');
Route::get('/departamentoMunicipios', 'UserController@actualizarDepartamentoMunicipio');
Route::get('/salaCamas', 'UserController@actualizarSalasCamas');
Route::get('/antecedentesPaciente', 'UserController@antecedentes');
Route::get('/clasificacionCirugias', 'UserController@cirugia');
Route::get('/subclasificacionCirugias', 'UserController@subcirugia');
Route::get('/agenda', 'UserController@agenda');
Route::get('/admisionPacientes', 'UserController@admisionPacientes');
Route::get('/prefactura', 'UserController@prefactura');
Route::get('/facturaClinica', 'UserController@facturaClinica');
Route::get('/generacionRips', 'UserController@generacionRips');
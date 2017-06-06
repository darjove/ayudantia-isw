<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('mostrarClientes', 'ClientesController@index');

Route::get('listarSucursales', 'SucursalController@index');
Route::post('createCliente', ['use'=>'ClientesController@store',
	'as'=>'createCliente']);
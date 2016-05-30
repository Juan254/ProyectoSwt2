<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return view('vistas.admin.auth.login');
});

Route::get('/admin', function () {
    return view('vistas.admin.inicioAdmin');
});

Route::group(['prefix' => '/admin'],function(){
			
	Route::resource('users', 'UsersController');

	Route::resource('vehiculos', 'VehiculosController');

	Route::resource('rentas', 'RentasController');

	Route::resource('facturas', 'FacturasController');

	Route::get('users/{id}/destroy', [
		'uses' 	=> 'UsersController@destroy',
		'as'	=> 'vistas.admin.users.destroy'	
	]);

	Route::get('vehiculos/{id}/destroy', [
		'uses' 	=> 'VehiculosController@destroy',
		'as'	=> 'vistas.admin.vehiculos.destroy'	
	]);

	Route::get('rentas/{id}/createRenta', [
			'uses' => 'RentasController@createRenta',
			'as'   => 'vistas.admin.rentas.createRenta'
	]);

	Route::post('rentas/{id}/storeRenta', [
			'uses' => 'RentasController@storeRenta',
			'as'   => 'vistas.admin.rentas.storeRenta'
	]);

	Route::get('rentas/{id}/destroy', [
		'uses' 	=> 'RentasController@destroy',
		'as'	=> 'vistas.admin.rentas.destroy'	
	]);

	Route::get('facturas/{id}/devolucion', [
		'uses'	=> 'FacturasController@devolucion',
		'as'	=> 'vistas.admin.facturas.devolucion'
	]);

	Route::post('facturas/{id}/storeFactura', [
		'uses'	=> 'FacturasController@storeFactura',
		'as'	=> 'vistas.admin.facturas.storeFactura'
	]);

});

Route::group(['prefix' => '/cliente'],function(){
			
	Route::resource('users', 'UsersController');

	Route::resource('rentas', 'RentasController');

	Route::resource('facturas', 'FacturasController');

});

Route::get('admin/auth/login', [
	'uses'	=> 'Auth\AuthController@getLogin',
	'as'	=> 'vistas.admin.auth.login'

]);

Route::post('admin/auth/login', [
	'uses'	=> 'Auth\AuthController@postLogin',
	'as'	=> 'vistas.admin.auth.login'

]);

Route::get('admin/auth/logout', [
	'uses'	=> 'Auth\AuthController@getLogout',
	'as'	=> 'vistas.admin.auth.logout'

]);




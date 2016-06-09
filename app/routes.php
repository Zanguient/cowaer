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


Route::get('/','LoginController@index');
Route::post('auth','LoginController@autenticar');
Route::get('auth',function(){
	return View::make('assets.404');
});


Route::group(array('prefix' => 'panel-control','before' => 'logado'),function(){
	// Menu Bar routes
	Route::get('dashboard','DashboardController@getDashboard');
	Route::get('logout','DashboardController@getLogout');
	Route::get('perfil','DashboardController@getPerfil');
	
	Route::post('perfil','DashboardController@postPerfil');

	Route::controller('/fazenda', "FazendaController");

	Route::controller('/usuario', "UsuarioController");

	Route::controller('/retiro', "RetiroController");

	Route::controller('/pastagem', "PastagemController");

	Route::controller('/piquete', "PiqueteController");

	Route::controller('/lote', "LoteController");

	Route::controller('/categoria-animal', "CategoriaAnimalController");
	Route::controller('/pelagem', "PelagemController");
	Route::controller('/raca', "RacaController");
	Route::controller('/laboratorio', "LaboratorioController");

	Route::controller('/animal', "AnimalController");
	
	Route::controller('ajuda','SuporteController');
	// Teste Boleto
	Route::controller('/boleto', "BoletoController");


});

// Metodo utilizado igualmente para o
	// missing do controller porém aqui
	// e da propria aplicação

App::missing(function($exception)
{
	return View::make('assets.404');
});
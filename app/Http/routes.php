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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('tipos', 'TipoController');

Route::get('tipos/{id}/delete', [
    'as' => 'tipos.delete',
    'uses' => 'TipoController@destroy',
]);


Route::resource('eventos', 'EventoController');

Route::get('eventos/{id}/delete', [
    'as' => 'eventos.delete',
    'uses' => 'EventoController@destroy',
]);


Route::resource('participantes', 'ParticipanteController');

Route::get('participantes/{id}/delete', [
    'as' => 'participantes.delete',
    'uses' => 'ParticipanteController@destroy',
]);


Route::resource('participantesEventos', 'ParticipantesEventoController');

Route::get('participantesEventos/{id}/delete', [
    'as' => 'participantesEventos.delete',
    'uses' => 'ParticipantesEventoController@destroy',
]);

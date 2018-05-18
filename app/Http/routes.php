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

Route::get('/', 'DashboardController@showDashboard');

Route::get('/service/status', 'SupportController@showStatus');
Route::get('/service/support', 'SupportController@showSupport');
Route::get('/service/support/create', 'SupportController@createTicket');
Route::post('/service/support/update', 'SupportController@updateTicket');

Route::get('/store/modules', 'StoreController@showModules');

Route::get('/modulo/alunos', 'AlunoController@showList');

Route::post('/api/login', 'LoginController@login');
Route::get('/api/register', 'LoginController@register');
Route::get('/api/logout', 'LoginController@logout');
Route::get('/login', function() {
    return view('login');
});
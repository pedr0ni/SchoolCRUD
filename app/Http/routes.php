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

Route::get('/', 'DashboardController@showDashboard')->middleware('auth');

Route::get('/service/status', 'SupportController@showStatus')->middleware('auth');
Route::get('/service/support', 'SupportController@showSupport')->middleware('auth');
Route::get('/service/support/create', 'SupportController@createTicket');
Route::post('/service/support/update', 'SupportController@updateTicket');

Route::get('/store/modules', 'StoreController@showModules')->middleware('auth');
Route::get('/store/history', 'StoreController@showHistory')->middleware('auth');

Route::get('/modulo/alunos', 'AlunoController@showList')->middleware('auth');

Route::post('/api/login', 'LoginController@login');
Route::post('/api/register', 'LoginController@register');
Route::get('/api/logout', 'LoginController@logout');
Route::get('/api/clearNotify', 'APIController@clearNotify');

Route::get('/login', function() {
    return view('login');
});
Route::get('/register', function() {
    return view('register');
});
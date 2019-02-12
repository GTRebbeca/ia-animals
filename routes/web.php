<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function()
{
    $loginURL = 'https://mycomponentqr-dev-ed.lightning.force.com';

    return Forrest::authenticate($loginURL);
});
Route::group(['prefix' => 'search'], function(){

	Route::post('index', [
			'uses'	=>	'search@index',
			'as'	=>	'index'
		]
	);
	Route::post('save', [
			'uses'	=>	'search@save',
			'as'	=>	'save'
		]
	);

	Route::post('SearchString', [
			'uses'	=>	'search@SearchString',
			'as'	=>	'SearchString'
		]
	);
});
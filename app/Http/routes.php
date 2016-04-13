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

Route::group(['as' => 'site::', 'middleware' => 'web'], function(){

	Route::get('/', 'Site\Home@Index');
	Route::get('/{page}', 'Site\Home@Page');

});

Route::group(['as' => 'hakon::', 'middleware' => 'auth'], function(){

	Route::get('/hakon-admin', ['as' => 'admin', 'Admin\Home@indexAction']);

});

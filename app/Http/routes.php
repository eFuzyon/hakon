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

Route::group(['as' => 'site::', 'middleware' => 'web'], function () {

    Route::get('/', ['as' => 'web', 'uses' => 'Site\Home@Index']);
    Route::get('/{page}', 'Site\Page@Selector')
    	->where('friendly_url', '(.*)');

});

Route::group(['as' => 'hakon::', 'middleware' => 'auth'], function () {

    Route::get('/hakon-admin', ['as' => 'admin', 'uses' => 'Admin\Home@indexAction']);
    Route::get('/hakon-admin/{page}', 'Admin\Page@Selector')
        ->where('friendly_url', '(.*)');

});

Route::group(['as' => 'hakon::', 'middleware' => 'auth'], function () {

    Route::get('/heimdall', ['as' => 'heimdall', 'uses' => 'Heimdall\Home@indexAction']);
    Route::get('/heimdall/{page}', 'Heimdall\Page@Selector')
        ->where('friendly_url', '(.*)');

});

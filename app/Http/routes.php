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

    Route::get('/', 'Site\Home@Index')
        ->name('web');

    Route::get('/{page}', 'Site\Page@Selector')
        ->where('friendly_url', '(.*)');

});

Route::group(['as' => 'hakon::', 'middleware' => 'auth'], function () {

    Route::get('/hakon-admin', 'Admin\Home@indexAction')
        ->name("admin");

    Route::get('/hakon-admin/{page}', 'Admin\Page@Selector')
        ->where('friendly_url', '(.*)');

});

Route::group(['as' => 'hakon::', 'middleware' => 'auth'], function () {

    Route::get('/heimdall', 'Heimdall\Home@indexAction')
        ->name('heimdall');

    Route::get('/heimdall/{page}', 'Heimdall\Page@Selector')
        ->where('friendly_url', '(.*)');

});

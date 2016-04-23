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
        ->where('page', '(.*)');

});

Route::group(['as' => 'hakon::', 'middleware' => 'authHakonAdmin'], function () {

    Route::get('/hakon-admin', 'Admin\Home@indexAction')
        ->name("admin");

    Route::get('/hakon-admin/{page}', 'Admin\Page@Selector')
        ->where('page', '(.*)');

});

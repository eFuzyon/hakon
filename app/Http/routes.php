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

# Fixed Routes
Route::group(['as' => 'site::', 'middleware' => 'web'], function () {

    Route::get('/', 'Site\Home@Index')
        ->name('web');

});

Route::group(['as' => 'hakon::', 'middleware' => 'web'], function () {

	# Get
    Route::get('/hakon', 'Admin\Home@Index')
        ->name("admin");

    Route::get('/hakon/recovery', 'Admin\Recovery@Index')
        ->name("passwordRecovery");

    # Post
    Route::post('/hakon', 'Admin\Home@SignIn');

});

# Dynamic Routes
Route::group(['as' => 'hakon::', 'middleware' => 'web'], function () {

    Route::get('/hakon/{page}', 'Admin\Page@Selector')
        ->where('page', '(.*)');

});

Route::group(['as' => 'site::', 'middleware' => 'web'], function () {

    Route::get('/{page}', 'Site\Page@Selector')
        ->where('page', '(.*)');

});

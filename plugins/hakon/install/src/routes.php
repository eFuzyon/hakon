<?php

/*
|--------------------------------------------------------------------------
| Installation Routes
|--------------------------------------------------------------------------
*/

Route::get('/install', 'Plugin\Hakon\Install\Controller\InstallController@setup');
Route::get('/install/status', 'Plugin\Hakon\Install\Controller\InstallController@status');
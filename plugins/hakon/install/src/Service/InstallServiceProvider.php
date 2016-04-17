<?php

namespace Plugin\Hakon\Install\Service;

use Illuminate\Support\ServiceProvider;

class InstallServiceProvider extends ServiceProvider {

	public function boot(){

		$this->loadViewsFrom(__DIR__.'/../View', 'install');

	}

	public function register(){

		# Include
		include __DIR__.'/../routes.php';

		# Code
		$this->app->make('Plugin\Hakon\Install\Controller\InstallController');

	}

}
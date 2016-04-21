<?php

namespace Plugin\Hakon\Install\Service;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;

class InstallServiceProvider extends ServiceProvider {

	public function boot(Dispatcher $events){

		# Call parent
		parent::boot($events);

		# Views
		$this->loadViewsFrom(__DIR__.'/../View', 'install');

		# Events
		$events->listen("App\Events\EventCoreTemplateMenuBefore", function(){
            
        });
        $events->listen("App\Events\EventCoreTemplateMenuAfter", function(){
            
        });

	}

	public function register(){

		# Include
		include __DIR__.'/../routes.php';

		# Code
		$this->app->make('Plugin\Hakon\Install\Controller\InstallController');

	}

}
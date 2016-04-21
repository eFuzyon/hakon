<?php

	use App\Events;
	use App\Events\EventCoreTemplateMenuBefore;
	use App\Events\EventCoreTemplateMenuAfter;
	use Illuminate\Html\HtmlBuilder as Html;

	Html::macro("Hook", function($name = null)
	{

		if ($name) :

			try {

				Html::$name();

			} catch(Exception $e){}

		endif;

	});

	Html::macro("Core::Template::Menu::Before", function()
	{
		Event::Fire(new EventCoreTemplateMenuBefore());
	});

	Html::macro("Core::Template::Menu::After", function()
	{
	    Event::Fire(new EventCoreTemplateMenuAfter());
	});
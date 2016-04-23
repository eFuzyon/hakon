<?php

	use App\Events;
	use App\Events\EventCoreTemplateMenuBefore;
	use App\Events\EventCoreTemplateMenuAfter;
	use Collective\Html\HtmlBuilder as Html;

	Html::macro("Hook", function($name = null, $param = null)
	{

		if ($name) :

			try {

				Html::$name($param);

			} catch(Exception $e){}

		endif;

	});

	Html::macro("Core::Template::Menu::Before", function($param = null)
	{
		Event::Fire(new EventCoreTemplateMenuBefore($param));
	});

	Html::macro("Core::Template::Menu::After", function($param = null)
	{
	    Event::Fire(new EventCoreTemplateMenuAfter($param));
	});
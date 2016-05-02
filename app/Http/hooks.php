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

	Html::macro("Core::Admin::Template::Menu", function($param = null)
	{
		Event::Fire(new EventCoreTemplateMenuBefore($param));
		Event::Fire(new EventCoreTemplateMenu($param));
		Event::Fire(new EventCoreTemplateMenuAfter($param));
	});

	Html::macro("Core::Admin::Template::Menu::Item", function($param = null)
	{
		Event::Fire(new EventCoreTemplateMenuItemBefore($param));
		Event::Fire(new EventCoreTemplateMenuItem($param));
		Event::Fire(new EventCoreTemplateMenuItemAfter($param));
	});
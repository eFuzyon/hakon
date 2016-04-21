<?php

	use Illuminate\Html\HtmlBuilder as Html;

	Html::macro("Hook", function($name = null)
	{
		if ($name) :
			Html::$name();
		endif;
	});

	Html::macro("Core::Template::Menu::Before", function()
	{
		echo "Core::Template::Menu::Before";
	});

	Html::macro("Core::Template::Menu::After", function()
	{
	    echo "Core::Template::Menu::After";
	});
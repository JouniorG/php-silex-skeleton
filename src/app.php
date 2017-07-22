<?php
	
	
	use Silex\Application;		

	$app = new Application();
	
	//Registrar servicios
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
	   	'twig.path' => __DIR__.'/../views'
	));


	return $app;
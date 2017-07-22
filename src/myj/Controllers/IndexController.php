<?php

	namespace Myj\Controller;

	use Silex\Application;
	use Silex\Api\ControllerProviderInterface;


	class IndexController implements ControllerProviderInterface{

		public function connect(Application $app){

			$controllers = $app['controllers_factory'];

			$controllers->get("/", function() use ($app){
				return $app['twig']->render("index.html.twig");
			});

			return $controllers;
		}
	}
<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);

	require __dir__."/../vendor/autoload.php";

	$app = require __dir__."/../src/app.php";

	require __dir__."/../src/myj/Controllers/ControllersLoader.php";
	require __dir__."/../src/routes.php";

	$app['debug'] = true;

	$app->run(); 
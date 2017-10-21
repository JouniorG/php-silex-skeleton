<?php

	use App\Controller\IndexController;

	$app->mount("/", new IndexController());
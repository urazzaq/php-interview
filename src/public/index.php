<?php

if (PHP_SAPI == 'cli-server') {
	// To help the built-in PHP dev server, check if the request was actually for
	// something which should probably be served as a static file
	$url  = parse_url($_SERVER['REQUEST_URI']);
	$file = __DIR__ . $url['path'];
	if (is_file($file)) {
		return false;
	}
}

require '../../vendor/autoload.php';
require '../autoload.php';

// Instantiate our Slim app
$app = new \Slim\App();

// Register dependencies
$servicesProvider = new \Config\AppServicesProvider();
$servicesProvider->register($app->getContainer());

// Register routes
$routesProvider = new \Config\AppRoutesProvider();
$routesProvider->register($app);

// Run it
$app->run();

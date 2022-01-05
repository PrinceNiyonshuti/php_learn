<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';

// $router = new Router;

// require 'routes.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// die(var_dump($app));

// require $router->direct($uri);

require Router::load('routes.php')
		->direct(Request::uri(), Request::method());
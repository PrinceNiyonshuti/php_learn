<?php

class Router{

	public $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($filepath)
	{
		$router = new static;	//creating a new router instance
		require $filepath;
		return $router;
	}

	public function get($uri,$controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri,$controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if(array_key_exists($uri, $this->routes[$requestType])){
			return $this->routes[$requestType][$uri];
		}

		throw new Exception("No route defined");
		
	}

}
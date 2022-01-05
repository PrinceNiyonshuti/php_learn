<?php

class Router{

	protected $routes = [];

	public static function load($filepath)
	{
		$router = new static;	//creating a new router instance
		require $filepath;
		return $router;
	}

	public function registerRoute($routes)
	{
		$this->routes = $routes;
	}

	public function direct($uri)
	{
		if(array_key_exists($uri, $this->routes)){
			return $this->routes[$uri];
		}

		throw new Exception("No route defined");
		
	}

}

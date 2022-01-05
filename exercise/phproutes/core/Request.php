<?php

class Request{

	public static function URI()
	{
		return  trim($_SERVER['REQUEST_URI'], '/');
	}

}
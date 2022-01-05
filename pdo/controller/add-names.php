<?php

// var_dump('Your name is '. $_POST['name']);

App::get('database')->insert('users',[
	'name' => $_POST['name']
]);

header('Location: /');	//redirect to a specific page after being successful
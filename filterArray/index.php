<?php

class Post {
	public $title;
	public $published;

	public function __construct($title,$published)
	{
		$this->title = $title;
		$this->published = $published;
	}
}

$posts = [
	new Post('The arriving train', true),
	new Post('The crying bird', false),
	new Post('Monalisa scandal', false),
	new Post('Bendnarek Mistreat', true),
	new Post('Mrs.Oliva earpieces', false)
];


$unpublishedPost = array_filter($posts, function($post){
	// return $post->published === false;
	return !$post->published;
});

$publishedPost = array_filter($posts, function($post){
	return $post->published;
});

// var_dump($publishedPost);

$modified = array_map(function($post){	//display only the titles of the elements found in the array
	// return ['title' => $post->title];
	return (array) $post;
},$posts);

// var_dump($modified);

$titles = array_column($posts, 'title');

// var_dump($titles);

class Task{
	public $name;
	public $description;
	public $completed;

	public function __construct($name,$description,$completed){
		$this->name = $name;
		$this->description = $description;
		$this->completed = $completed;
	}
}

$tasks = [
	new Task('eric','paying debt',false),
	new Task('angelo','preparing to go to school',true),
	new Task('angelo','buying school tools',false),
	new Task('eric','going to church',false),
	new Task('angelo','shaving his hair',false),
	new Task('mozay','providing weekly assignments',true),
];

// var_dump($tasks);

$completedTask = array_filter($tasks,function($task){
	return $task->completed;
});

// var_dump($completedTask);

$uncompletedTask = array_filter($tasks,function($task){
	return !$task->completed;
});

// var_dump($uncompletedTask);

$descr = array_column($tasks,'description');

// var_dump($descr);

$modify = array_map(function($task){
	return (array) $task;
},$tasks);

var_dump($modify);

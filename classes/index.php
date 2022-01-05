<?php

// require 'functions.php';

class Task {

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        //construct = automatically triggered on the instantiation
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete()    
    {
        return $this->completed;
    }

 }

// $task = new Task('Go to gym');  //assigning a new description

// $task->complete();  //makes the isComplete to true

// var_dump($task -> isComplete());  //gets the value of isComplete

// // dd($task);   //pass the value to the function created

$task = [
    new Task('Go to store'),
    new Task('Finish my school assignment'),
    new Task('Clean the house')
];

$task[0]-> complete();

// dd($task);

//assignment to do
class User{
    public $email;
    public $username;
    public $isAdmin=false;

    public function __construct($email,$username)
    {
        $this->email = $email;
        $this->username = $username;
    }

    //will make the admin from false to true
    public function admin(){
        $this->isAdmin=true;
    }

}

$users = [
    new User('angelo@gmail.com','angelo'),
    new User('jonas@gmail.com','jonas'),
    new User('despa@gmail.com','despa')
];

//will change the isAdmin value on index 2 from false to true
$users[2]->admin();

require 'index.view.php';

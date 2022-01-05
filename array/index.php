<?php

$names = [
    'Jeff',
    'Tarzan',
    'Mary'
];

$liverpoolPlayers = [
    'Alisson',
    'TAA',
    'Robertson',
    'VVD',
    'Matip',
    'Fabinho',
    'Henderson',
    'Firmino',
    'Salah',
    'Mane',
    'Jota'
];

//associative array
$person = [
    'age' => 19,
    'hair' => 'brown',
    'career' => 'student',
];
$person['country'] = 'Rwandan'; //add an element in the array
unset($person['hair']); //remove an element in the array

//die(var_dump($person));  //var_dump function changes the array into a string
//die function will stop everything that will come after that to be executed.

$liverpoolPlayer = [
    'GK' => 'Alisson',
    'RB' => 'TAA',
    'LB' => 'Robertson',
    'CB' => 'VVD',
    'CB' => 'Matip',
    'DM' => 'Fabinho',
    'CM' => 'Henderson',
    'AM' => 'Firmino',
    'RW' => 'Salah',
    'LW' => 'Mane',
    'P' => 'Jota',
    'Sub' => 'Chamberlain'
];
$liverpoolPlayer['Coach'] = 'Jurgen Klopp';  //add an element in the associative array
unset($liverpoolPlayer['Sub']); //delete an element in the associative array

$todo = [
    'title' => 'Washing clothes',
    'due' => 'on 01/01/2022',
    'assigned_to' => 'My little sister',
    'completed' => 'Not'
];


require 'index.view.php';
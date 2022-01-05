<?php

// function dumper($one, $two, $three){
//     var_dump($one, $two, $three);
// }

// dumper('Hello','Nigga','Gee');

$animals = ['GSD','Rotterweiller','Boerboel'];

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

// dd($data);

function checkAge($age){
    if($age >= 21){
        echo "You are $age, You are allowed to enter in the night club";
    } else {
        echo "You are $age, You are not allowed to enter in the night club";
    }
}

checkAge(25);

require 'index.view.php';

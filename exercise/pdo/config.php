<?php

return [
    'databaseconfiguration' => [
        'name'=>'users',
        'connection'=>'mysql:host=127.0.0.1',
        'username'=>'root',
        'password'=>'',
        'options'=>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
    ]
];
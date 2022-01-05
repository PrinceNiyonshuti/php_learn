<?php

// $app = [];

// $app['config'] = require 'Config.php';

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );

App::bind('config', $config = require'Config.php');

// die(var_dump(App::get('config')));

// $config = App::get('config'); //get the configuration array

App::bind('database', new QueryBuilder(
    Connection::make($config['database'])
));
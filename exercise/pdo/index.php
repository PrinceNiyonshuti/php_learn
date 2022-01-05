<?php

$query = require 'Refactor.php';

$user = $query->selectAll('user');

require 'index.view.php';
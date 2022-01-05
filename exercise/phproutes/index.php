<?php

require 'core/Refactors.php';

require Router::load('routes.php')
		->direct(Request::uri());
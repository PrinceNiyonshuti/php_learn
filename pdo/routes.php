<?php

$router->get('','controller/index.php');

$router->get('about','controller/about.php');

$router->get('about/culture','controller/about-culture.php');

$router->get('contact','controller/contact.php');

$router->post('names','controller/add-names.php');

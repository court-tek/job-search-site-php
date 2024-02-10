<?php

$router->get('/', 'controllers/app.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
<?php

$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingController@index');
$router->get('/listing/{id}', 'ListingController@show');
$router->get('/listings/new', 'ListingController@new');
$router->post('/listings', 'ListingController@create');

// $uri = $_SERVER['REQUEST_URI'];

// inspectAndDie($uri);
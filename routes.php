<?php

// Web routes
$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingController@index');
$router->get('/listing/{id}', 'ListingController@show');
$router->get('/listings/new', 'ListingController@new');
$router->get('/listing/edit/{id}', 'ListingController@edit');
$router->post('/listings', 'ListingController@create');
$router->put('/listing/{id}', 'ListingController@update');
$router->delete('/listing/{id}', 'ListingController@destroy');

// Api routes
$router->get('/api/single_listing/{id}', 'ApiController@show');
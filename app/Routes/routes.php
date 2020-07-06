<?php
use Pecee\SimpleRouter\SimpleRouter as Router;
use Taco\Controllers\TacoController;

$Router = new Router();
$Router::setDefaultNamespace('\Taco\Controllers');
$Router::get('/api/tacos', 'TacoController@index');
$Router::get('/api/taco/{name}', 'TacoController@show');
$Router::put('/api/taco/{name}', 'TacoController@update');
$Router::delete('/api/taco/{name}', 'TacoController@delete');

$Router::start();
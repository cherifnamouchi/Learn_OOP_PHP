<?php

require '../vendor/autoload.php';

use Router\Router;
use Exceptions\RouteNotFoundException;

$router = new Router();

$router->register('/', ['Controllers\HomeController', 'index']);

/* $router->register('/contact', function() {
    return 'ContactPage';
});

$router->register('/user', function() {
    return 'UserPage';
}); */

$newPath = explode('/learn_oop_php/13-MVC/public', $_SERVER['REQUEST_URI']);
$newPath = implode($newPath);

try {
    echo $router->resolve($newPath);  
} catch(RouteNotFoundException $e) {
    echo $e->getMessage();
}

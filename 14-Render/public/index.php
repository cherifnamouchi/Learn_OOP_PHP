<?php

require '../vendor/autoload.php';

use Router\Router;
use Exceptions\RouteNotFoundException;


define('DS', DIRECTORY_SEPARATOR);
define('BASE_VIEW_PATH', dirname(__DIR__) . DS . 'Views' . DS);
$router = new Router();

$router->register('/', ['Controllers\HomeController', 'index']);

/* $router->register('/contact', function() {
    return 'ContactPage';
});

$router->register('/user', function() {
    return 'UserPage';
}); */

$newPath = explode('/learn_oop_php/14-Render/public', $_SERVER['REQUEST_URI']);
$newPath = implode($newPath);

try {
    echo $router->resolve($newPath);  
} catch(RouteNotFoundException $e) {
    echo $e->getMessage();
}

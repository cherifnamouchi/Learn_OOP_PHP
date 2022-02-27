<?php

require '../vendor/autoload.php';

use Router\Router;
use Exceptions\RouteNotFoundException;

$router = new Router();

$router->register('/', function() {
    return 'HomePage';
});

$router->register('/contact', function() {
    return 'ContactPage';
});

/* echo '<pre>';
var_dump($router);
echo '</pre>'; */
try {
    echo $router->resolve($_SERVER['REQUEST_URI']);  
} catch(RouteNotFoundException $e) {
    echo $e->getMessage();
}

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

$router->register('/user', function() {
    return 'UserPage';
});

/* var_dump($router);

 echo '<pre>';
var_dump(explode('public', $_SERVER['REQUEST_URI']));
echo '</pre>'; */
$newPath = explode('/learn_oop_php/12-Router/public', $_SERVER['REQUEST_URI']);
#var_dump($newPath);
$newPath = implode($newPath);
#var_dump($newPath);
try {
    echo $router->resolve($newPath);  
} catch(RouteNotFoundException $e) {
    echo $e->getMessage();
}

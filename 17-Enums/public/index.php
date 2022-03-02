<?php

use Source\App;
use Router\Router;

require './../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views'
. DIRECTORY_SEPARATOR);

$router = new Router();

$router->get('/', ['Controllers\HomeController', 'index']);


$newPath = explode('/learn_oop_php/17-Enums/public', $_SERVER['REQUEST_URI']);
$newPath = implode($newPath);


(new App($router, [
    'uri' => $newPath,
    'method' => $_SERVER['REQUEST_METHOD']
    ]
))->run();
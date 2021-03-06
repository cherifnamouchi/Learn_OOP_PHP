<?php

use Source\App;
use Router\Router;

require './../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views'
. DIRECTORY_SEPARATOR);

$router = new Router();

$router->register('/', ['Controllers\HomeController', 'index']);

$newPath = explode('/learn_oop_php/15-Model/public', $_SERVER['REQUEST_URI']);
$newPath = implode($newPath);
(new App($router, $newPath))->run();
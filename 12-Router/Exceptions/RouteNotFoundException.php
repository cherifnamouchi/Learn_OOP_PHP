<?php
namespace Exceptions;

use Exception;

class RouteNotFoundException extends Exception {

    PROTECTED $message = 'Cette route n\'existe pas.';

}
<?php

namespace Class\Exceptions;
use Exception;


class UserException extends Exception {

    public static function notVerified() : static {
        return new static('User not FOUND!!!!');
    }
}
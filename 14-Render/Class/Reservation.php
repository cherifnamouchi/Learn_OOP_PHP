<?php

namespace Class;


class Reservation {

    private static int $count = 0;
    private static ?self $_instance = null;

    private function __construct() {
        self::$count++;
    }

    public static function getCount(): int {
        return self::$count;
    }

    public static function getInstance(): self {
        if(is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
}
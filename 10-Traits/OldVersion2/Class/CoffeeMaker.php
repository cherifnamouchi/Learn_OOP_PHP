<?php

namespace Class;


abstract class CoffeeMaker {

    public function makeCoffee() : string {
        return static::class . ' fait un cafe';
    }
}
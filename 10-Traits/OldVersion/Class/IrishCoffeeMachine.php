<?php

namespace Class;

use Class\contracts\IrishCoffeeInterface;

class IrishCoffeeMachine extends CoffeeMaker implements IrishCoffeeInterface {

    public function makeIrishCoffee() : string {
        return static::class . ' fait un irish coffee';
    }
}
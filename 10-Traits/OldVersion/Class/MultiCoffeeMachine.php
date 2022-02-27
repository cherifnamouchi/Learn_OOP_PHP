<?php

namespace Class;

use Class\contracts\EspressoCoffeeInterface;
use Class\contracts\IrishCoffeeInterface;


class MultiCoffeeMachine extends CoffeeMaker implements EspressoCoffeeInterface, IrishCoffeeInterface {
    
    public function makeEspresso() : string {
        return static::class . ' fait un espresso';
    }

    public function makeIrishCoffee() : string {
        return static::class . ' fait un irish coffee';
    }

}
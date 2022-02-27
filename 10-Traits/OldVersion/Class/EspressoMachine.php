<?php

namespace Class;

use Class\contracts\EspressoCoffeeInterface;


class EspressoMachine extends CoffeeMaker implements EspressoCoffeeInterface {

    public function makeEspresso() : string {
        return static::class . ' fait un espresso';
    }
}
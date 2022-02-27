<?php

namespace Class;

use Class\Traits\EspressoCoffeeTrait;


class EspressoMachine extends CoffeeMaker{

    use EspressoCoffeeTrait;

    public function makeEspresso() : string {
        return static::class . ' fait un espresso (DEPUIS ESPRESSOMACHINE)';
    }
}
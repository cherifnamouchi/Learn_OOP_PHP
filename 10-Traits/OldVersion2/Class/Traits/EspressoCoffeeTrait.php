<?php

namespace Class\Traits;

trait EspressoCoffeeTrait {
    
    private float $temperature = 25.7;

    public function makeEspresso() : string {
        return static::class . ' fait un espresso' . $this->temperature;
    }

    public function makeCoffee() : string {
        return static::class . ' fait un cafe (DEPUIS LE TRAIT)';
    }

    #parent > trait > classe fille 
    #En cas de collision de trait 
    # use IrishCoffeeTrait {
        #IrishCoffeeTrait::makeEspresso insteadof EspresspCoffeeTrait;
    #}
}
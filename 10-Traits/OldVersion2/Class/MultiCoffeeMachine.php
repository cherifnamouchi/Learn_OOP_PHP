<?php

namespace Class;

use Class\Traits\EspressoCoffeeTrait;
use Class\Traits\IrishCoffeeTrait;


class MultiCoffeeMachine extends CoffeeMaker {
    
    use IrishCoffeeTrait;
    use EspressoCoffeeTrait;

}
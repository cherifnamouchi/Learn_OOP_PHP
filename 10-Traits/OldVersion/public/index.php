<?php

require '../vendor/autoload.php';

use Class\EspressoMachine;
use Class\IrishCoffeeMachine;
use Class\MultiCoffeeMachine;

$espresso = new EspressoMachine();

$irishCoffee = new IrishCoffeeMachine();

$multiCoffeMachine = new MultiCoffeeMachine();

var_dump(
    $espresso->makeEspresso(), 
    $irishCoffee->makeIrishCoffee(),
    $espresso->makeCoffee(), 
    $irishCoffee->makeCoffee(),
    $multiCoffeMachine->makeEspresso(), 
    $multiCoffeMachine->makeIrishCoffee(),
    $multiCoffeMachine->makeCoffee()
);
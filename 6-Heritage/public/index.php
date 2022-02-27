<?php

require '../vendor/autoload.php';

use Class\CoffeeMachine;
use Class\PremiumCoffeeMachine;

$coffeeMachine = new CoffeeMachine(5);
$premiumCoffeeMachine = new PremiumCoffeeMachine(5);


$coffeeMachine->select('espresso');
$premiumCoffeeMachine->select('vanilla');
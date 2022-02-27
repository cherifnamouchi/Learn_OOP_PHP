<?php

require '../vendor/autoload.php';

use Class\Peugeot;
use Class\Renault;


$peugeot = new Peugeot('Peugeot');
$renault = new Renault('Renault');

var_dump($peugeot->rouler(), $peugeot->marque());
var_dump($renault->rouler(), $renault->marque());

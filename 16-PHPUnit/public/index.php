<?php

require '../vendor/autoload.php';

use Class\Reservation;

/* $reservation = new Reservation();
$reservation = new Reservation();
$reservation = new Reservation();
$reservation = new Reservation(); */

#echo $reservation::$count;


var_dump(Reservation::getInstance());
var_dump(Reservation::getCount());
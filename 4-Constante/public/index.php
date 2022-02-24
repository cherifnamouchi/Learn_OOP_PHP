<?php

require '../vendor/autoload.php';

use Class\Reservation;

$reservation = new Reservation();

/* $status = 'en attente';

if($status === Reservation::APPROVAL_PENDING) {
    echo 'en attente';
} */

#echo Reservation::APPROVAL_APPROVED;

var_dump($reservation);
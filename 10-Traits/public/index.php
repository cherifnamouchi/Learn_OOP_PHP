<?php

require '../vendor/autoload.php';

use Class\Invoice;
use Class\User;

$user = new User();
$invoice = new Invoice();

var_dump($user->sendEmail(), $invoice);

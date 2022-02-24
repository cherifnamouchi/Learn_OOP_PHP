<?php

/* require_once('./Class/PayPal/Payment.php');
require_once('./Class/Stripe/Payment.php');
require_once('./Class/Users/User.php'); */


/* spl_autoload_register(function($class) {
    $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    echo $path;
    if(file_exists($path)) {
        require $path;
    }
}); */

require '../vendor/autoload.php';

use \Class\PayPal\Payment;
use \Class\Stripe\Payment as Stripe;

$paymentPayPal = new Payment();
$paymentStripe = new Stripe();

#$paymentPayPal = new \Class\PayPal\Payment();
#$paymentStripe = new \Class\Stripe\Payment();
#$payment = new \Class\PayPal\Payment();
var_dump($paymentPayPal, $paymentStripe);
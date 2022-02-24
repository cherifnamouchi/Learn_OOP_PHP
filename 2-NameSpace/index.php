<?php

require_once('./Class/PayPal/Payment.php');
require_once('./Class/Stripe/Payment.php');
require_once('./Class/Users/User.php');

use \Class\PayPal\Payment;
use \Class\Stripe\Payment as Stripe;

$paymentPayPal = new Payment();
$paymentStripe = new Stripe();

#$paymentPayPal = new \Class\PayPal\Payment();
#$paymentStripe = new \Class\Stripe\Payment();
#$payment = new \Class\PayPal\Payment();
var_dump($paymentPayPal, $paymentStripe);
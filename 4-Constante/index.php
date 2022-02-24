<?php

require_once('./Class/Cart.php');

$cart = new Cart(50, 200);

#var_dump($cart->quantity);
//var_dump($cart->totalPrice);

$cart->setTotalPrice(300);
$cart->discount(50);
$cart->getTotalPrice();
var_dump($cart);
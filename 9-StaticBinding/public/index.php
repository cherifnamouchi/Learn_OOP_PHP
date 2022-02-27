<?php

require '../vendor/autoload.php';

use Class\ParentClass;
use Class\ChildClass;

$parent = new ParentClass();
$child = new ChildClass();

#var_dump($parent->getName(), $child->getName());
var_dump(ParentClass::getName(), ChildClass::getName());


var_dump($parent->factory());
var_dump($parent->factory());
var_dump($parent->factory());
var_dump($parent->factory());

var_dump($child->factory());
var_dump($child->factory());
var_dump($child->factory());
var_dump($child->factory());



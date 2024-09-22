<?php

use ManuFuhrmann\Creational\Factory\ObjectACreator;
use ManuFuhrmann\Creational\Factory\ObjectBCreator;

require_once 'ObjectACreator.php';
require_once 'ObjectBCreator.php';

$factoryA = new ObjectACreator();
$objectA = $factoryA->createObject();

$factoryB = new ObjectBCreator();
$objectB = $factoryB->createObject();

echo $objectA->doSomething() . PHP_EOL;
echo $objectB->doSomething();
<?php

use ManuFuhrmann\Creational\Singleton\Singleton;

require_once 'Singleton.php';

$oneAndOnly = Singleton::getInstance();
$oneAndOnly->setName('foo');

$testRecall = Singleton::getInstance();

echo $testRecall->getName() . PHP_EOL;

$oneAndOnly->setName('bar');

echo $testRecall->getName();
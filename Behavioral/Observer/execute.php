<?php

use ManuFuhrmann\Behavioral\Observer\Publisher;
use ManuFuhrmann\Behavioral\Observer\Subscriber;

require_once 'Publisher.php';
require_once 'Subscriber.php';

$publisher = new Publisher();

$sub1 = new Subscriber('John Doe');
$publisher->addClient($sub1);

$sub2 = new Subscriber('Jane Doe');
$publisher->addClient($sub2);

$publisher->notify('24th Dec is christmas every year');
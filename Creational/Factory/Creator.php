<?php

namespace ManuFuhrmann\Creational\Factory;

require_once 'ObjectInterface.php';

abstract class Creator
{
    abstract public function createObject(): ObjectInterface;
}
<?php

namespace ManuFuhrmann\Creational\Factory;

require_once 'ObjectInterface.php';

class ObjectB implements ObjectInterface
{

    public function doSomething(): string
    {
        return 'ObjectB is doing something';
    }
}
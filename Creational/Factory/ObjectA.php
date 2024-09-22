<?php

namespace ManuFuhrmann\Creational\Factory;

require_once 'ObjectInterface.php';

class ObjectA implements ObjectInterface
{

    public function doSomething(): string
    {
        return 'ObjectA is doing something';
    }
}
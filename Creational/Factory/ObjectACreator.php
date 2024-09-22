<?php

namespace ManuFuhrmann\Creational\Factory;

require_once 'Creator.php';
require_once 'ObjectInterface.php';
require_once 'ObjectA.php';

class ObjectACreator extends Creator
{

    public function createObject(): ObjectInterface
    {
        return new ObjectA();
    }
}
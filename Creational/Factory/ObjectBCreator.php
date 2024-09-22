<?php

namespace ManuFuhrmann\Creational\Factory;

require_once 'Creator.php';
require_once 'ObjectInterface.php';
require_once 'ObjectB.php';

class ObjectBCreator extends Creator
{

    public function createObject(): ObjectInterface
    {
        return new ObjectB();
    }
}
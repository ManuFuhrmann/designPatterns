<?php

namespace ManuFuhrmann\Creational\Singleton;

class Singleton
{
    private static $instance;
    private $name;

    protected function __construct()
    {
        //do some stuff
    }

    protected function __clone()
    {

    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
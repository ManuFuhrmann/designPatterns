<?php

namespace ManuFuhrmann\Behavioral\Observer;

class Subscriber
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $news)
    {
        echo $this->name . ' received "' . $news . '"' . PHP_EOL;
    }
}
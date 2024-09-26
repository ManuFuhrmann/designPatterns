<?php

namespace ManuFuhrmann\Behavioral\State;

abstract class AbstractState
{
    protected Project $context;

    public function setContext(Project $context)
    {
        $this->context = $context;
    }

    abstract public function getStateName(): string;

    abstract public function previousState(): AbstractState;

    abstract public function nextState(): AbstractState;
}
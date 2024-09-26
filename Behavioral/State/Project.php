<?php

namespace ManuFuhrmann\Behavioral\State;

require_once 'AbstractState.php';

class Project
{
    private AbstractState $state;

    public function __construct(AbstractState $state)
    {
        $this->state = $state;
    }

    public function previousState(): void
    {
        $this->state = $this->state->previousState();
    }

    public function nextState(): void
    {
        $this->state = $this->state->nextState();
    }

    public function getStateName(): string
    {
        return 'the state is now: ' . $this->state->getStateName();
    }
}
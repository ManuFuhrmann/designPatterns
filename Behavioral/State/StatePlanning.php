<?php

namespace ManuFuhrmann\Behavioral\State;

require_once 'AbstractState.php';
require_once 'StateOpen.php';

class StatePlanning extends AbstractState
{
    public function getStateName(): string
    {
        return 'Planning';
    }

    public function previousState(): AbstractState
    {
        echo 'there is no state before ' . $this->getStateName() . PHP_EOL;
        return $this;
    }

    public function nextState(): AbstractState
    {
        return new StateOpen();
    }
}
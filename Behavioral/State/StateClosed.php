<?php

namespace ManuFuhrmann\Behavioral\State;

require_once 'AbstractState.php';
require_once 'StateProgress.php';

class StateClosed extends AbstractState
{
    public function getStateName(): string
    {
        return 'Closed';
    }

    public function previousState(): AbstractState
    {
        return new StateProgress();
    }

    public function nextState(): AbstractState
    {
        echo 'there are no more states after ' . $this->getStateName() . PHP_EOL;
        return $this;
    }
}
<?php

namespace ManuFuhrmann\Behavioral\State;

require_once 'AbstractState.php';
require_once 'StateOpen.php';
require_once 'StateClosed.php';

class StateProgress extends AbstractState
{
    public function getStateName(): string
    {
        return 'Progress';
    }

    public function previousState(): AbstractState
    {
        return new StateOpen();
    }

    public function nextState(): AbstractState
    {
        return new StateClosed();
    }
}
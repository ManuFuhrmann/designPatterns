<?php

namespace ManuFuhrmann\Behavioral\State;

require_once 'AbstractState.php';
require_once 'StatePlanning.php';
require_once 'StateProgress.php';

class StateOpen extends AbstractState
{
    public function getStateName(): string
    {
        return 'Open';
    }

    public function previousState(): AbstractState
    {
        return new StatePlanning();
    }

    public function nextState(): AbstractState
    {
        return new StateProgress();
    }
}
<?php

namespace ManuFuhrmann\Behavioral\State;

require_once 'Project.php';
require_once 'StatePlanning.php';

$context = new Project(new StatePlanning());
echo $context->getStateName() . PHP_EOL;
$context->previousState();
$context->nextState();
echo $context->getStateName() . PHP_EOL;
$context->nextState();
echo $context->getStateName() . PHP_EOL;
$context->nextState();
echo $context->getStateName() . PHP_EOL;
$context->nextState();
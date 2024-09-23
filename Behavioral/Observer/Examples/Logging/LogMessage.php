<?php

namespace ManuFuhrmann\Behavioral\Observer\Examples\Logging;

use LogMessageStateEnum;

require_once __DIR__ . '/LogMessageStateEnum.php';

class LogMessage
{
    private LogMessageStateEnum $state;
    private string $message;

    public function __construct(string $message, LogMessageStateEnum $state = LogMessageStateEnum::Normal)
    {
        $this->state = $state;
        $this->message = $message;
    }

    public function getState(): LogMessageStateEnum
    {
        return $this->state;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
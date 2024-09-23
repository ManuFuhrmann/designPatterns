<?php

namespace ManuFuhrmann\Behavioral\Observer\Examples\Logging;

use ManuFuhrmann\Behavioral\Observer\Examples\Logging\Logger\LoggerInterface;

require_once __DIR__ . '/Logger/LoggerInterface.php';
require_once __DIR__ . '/LogMessage.php';

class LogPublisher
{
    private array $loggers;

    public function addLogger(LoggerInterface $logger): void
    {
        $this->loggers[] = $logger;
    }

    public function log(LogMessage $message): void
    {
        foreach ($this->loggers as $logger) {
            $logger->update($message);
        }
    }
}
<?php

namespace ManuFuhrmann\Behavioral\Observer\Examples\Logging\Logger;

use ManuFuhrmann\Behavioral\Observer\Examples\Logging\LogMessage;

require_once __DIR__ . '/../LogMessage.php';

interface LoggerInterface
{
    public function update(LogMessage $message): void;
}
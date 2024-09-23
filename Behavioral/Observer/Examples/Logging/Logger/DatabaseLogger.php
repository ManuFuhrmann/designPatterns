<?php

namespace ManuFuhrmann\Behavioral\Observer\Examples\Logging\Logger;

use ManuFuhrmann\Behavioral\Observer\Examples\Logging\LogMessage;
use PDO;

require_once __DIR__ . '/LoggerInterface.php';
require_once __DIR__ . '/../LogMessage.php';

class DatabaseLogger implements LoggerInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function update(LogMessage $message): void
    {
        if ($message->getState() == \LogMessageStateEnum::Critical) {
            echo 'we will write "' . $message->getMessage() . '" into database' . PHP_EOL;
            /*
            $stmt = $this->pdo->prepare('INSERT INTO logs ("message") VALUES (:MESSAGE)');
            $stmt->execute(array(
                ':MESSAGE' => $message->getMessage(),
            ));
            */
        }
    }
}
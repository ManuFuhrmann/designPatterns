<?php

namespace ManuFuhrmann\Behavioral\Observer\Examples\Logging\Logger;

use ManuFuhrmann\Behavioral\Observer\Examples\Logging\LogMessage;

require_once __DIR__ . '/LoggerInterface.php';
require_once __DIR__ . '/../LogMessage.php';

class FileLogger implements LoggerInterface
{
    private string $file;
    /**
     * @var resource
     */
    private $handler;

    public function __construct(string $file)
    {
        if ($handler = fopen($file, 'a')) {
            $this->handler = $handler;
        } else {
            throw new \Exception('file not writable');
        }
    }

    public function __destruct()
    {
        fclose($this->handler);
    }

    public function update(LogMessage $message): void
    {
        echo 'we will write "' . $message->getMessage() . '" into file' . PHP_EOL;
        //fwrite($this->handler, $message->getMessage());
    }
}
<?php

use ManuFuhrmann\Behavioral\Observer\Examples\Logging\LogPublisher;
use ManuFuhrmann\Behavioral\Observer\Examples\Logging\Logger\FileLogger;
use ManuFuhrmann\Behavioral\Observer\Examples\Logging\Logger\DatabaseLogger;
use ManuFuhrmann\Behavioral\Observer\Examples\Logging\LogMessage;

require_once __DIR__ . '/LogPublisher.php';
require_once __DIR__ . '/Logger/FileLogger.php';
require_once __DIR__ . '/Logger/DatabaseLogger.php';
require_once __DIR__ . '/LogMessage.php';
require_once __DIR__ . '/LogMessageStateEnum.php';

$publisher = new LogPublisher();

$log1 = new FileLogger('/var/log/app.log');
$publisher->addLogger($log1);

$pdo = new PDO('sqlite::memory');
$log2 = new DatabaseLogger($pdo);
$publisher->addLogger($log2);

$message1 = new LogMessage('User `John Doe` created');
$message2 = new LogMessage('`John Doe` tries 5 times a wrong password', LogMessageStateEnum::Critical);

$publisher->log($message1);
$publisher->log($message2);
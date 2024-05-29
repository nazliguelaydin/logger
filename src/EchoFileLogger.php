<?php

namespace Nazliguelaydin\Logger;

use Nazliguelaydin\Logger\ILogger;

class echoFileLogger implements ILogger
{


    private array $loggers = [];

    public function addLogger(ILogger $logger){
        $this->loggers[] = $logger;
    }

    public function logEntry($line)
    {
       foreach ($this->loggers as $logger) {
           $logger->logEntry($line);
       }
    }
}
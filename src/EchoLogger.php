<?php

namespace Nazliguelaydin\Logger;

use Nazliguelaydin\Logger\ILogger;

class EchoLogger implements ILogger
{

    public function logEntry($line)
    {
        echo $line . "\n";
    }
}
<?php

require_once __DIR__ . '/../vendor/autoload.php';

abstract class Logger {
    abstract public function log($message): string;  
}
class FileLog extends Logger{
    public function log($message):string{
        return 'FileLog: ' . $message; 
    }

}

class Databaselog extends Logger{
    public function log($message):string{
        return 'FileLog: ' . $message; 
    }
}

$logger = new Filelog;
dump($logger->log('Hello World'));
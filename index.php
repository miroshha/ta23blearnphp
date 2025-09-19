<?php

// library code 

class Job {
    public function task(Logger $logger){
        for($i=0; $i<10; $i++){
            // work
            $logger->log("Task $i was completed");
            
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo "$message\n";
    }
}

interface Logger {
    public function log($message);
}


// user code

class NothingLogger implements Logger {
    public function log($message) {
       
    }
}

class FileLogger implements Logger {
    public function log($message) {
       $file = fopen('log.log', 'a');
       fwrite($file, "$message\n");
       fclose($file);
    }
}


$job = new Job();
$logger = new ConsoleLogger();
$job->task($logger);
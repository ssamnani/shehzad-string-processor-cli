<?php

require __DIR__ . '/vendor/autoload.php';

use Clue\React\Stdio\Stdio;
use SSamnaniLib\Processor\BasicStringProcessor;
use SSamnaniLib\Processor\AlternateCaseStringProcessor;
use SSamnaniLib\Processor\UppercaseStringProcessor;

$processors = array(
    new BasicStringProcessor(),
    new AlternateCaseStringProcessor(),
    new UppercaseStringProcessor()
);

$loop = React\EventLoop\Factory::create();
$stdio = new Stdio($loop);

$stdio->write('You can type quit any time to close the prompt');
$stdio->setPrompt('Input > ');

$stdio->on('data', function ($line) use ($stdio, $processors) {
    $line = rtrim($line, "\r\n");

    // The basics first ;)
    if ($line === 'quit') {
        $stdio->end();
    }

    foreach ($processors as $processor) {
        $processed = $processor->process($line);
        $stdio->write($processed . PHP_EOL);
        $processed = null;
    }
});

$loop->run();
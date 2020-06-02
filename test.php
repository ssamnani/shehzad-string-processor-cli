<?php

require __DIR__ . '/vendor/autoload.php';

use SSamnaniLib\Output\StandardOutputStringProcessor;
use SSamnaniLib\Processor\BasicStringProcessor;

$processor = new BasicStringProcessor();
$output = new StandardOutputStringProcessor($processor);
$output->ProcessIt("ABC");
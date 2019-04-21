<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Stopwatch\Stopwatch;

// using stopwatch from composer
$stopwatch = new Stopwatch();
$stopwatch->start('foo', 'cat');
usleep(2000000);
$event = $stopwatch->stop('foo');

echo $event; 
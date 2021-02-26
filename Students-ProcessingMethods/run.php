<?php

require_once 'app/start.php';

use Sourcecode\Fifo;
use Sourcecode\Lifo;
use Sourcecode\Fafi;
use Library\Process;

$processes = array(
    new Process('ls', 'List all files in current directory'),
    new Process('touch', 'Creates a new file'),
    new Process('mkdir', 'Creates a new directory')
);

$fifo = new Fifo();

foreach ($processes as $process) {
    $fifo->addProcess($process);
}

$fifo->run();

//////////////////////////////////////////////////////////////////////////////////////////////////////////

$lifo = new Lifo();

foreach ($processes as $process) {
    $lifo->addProcess($process);
}

$lifo->run();

//////////////////////////////////////////////////////////////////////////////////////////////////////////

$fafi = new Fafi();

foreach ($processes as $process) {
    $fafi->addProcess($process);
}

$fafi->run();

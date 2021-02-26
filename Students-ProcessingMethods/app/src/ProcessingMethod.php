<?php

namespace Sourcecode;

use Library\Process;

abstract class ProcessingMethod
{
    protected $_processesList = array();

    public function addProcess(Process $process)
    {
        $process->setProcessor($this);
        $this->_processesList[] = $process;
    }

    public function run()
    {
    }
}

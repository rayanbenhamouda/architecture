<?php

namespace Library;

use mysql_xdevapi\Exception;
use Sourcecode\ProcessingMethod;

class Process
{
    protected $_name = '';
    protected $_action = '';
    protected $_size = null;
    protected $_processor = null;

    public function __construct(string $processName, string $action)
    {
        $this->_name = $processName;
        $this->_action = $action;
        $this->_size = strlen($this->_action);
    }

    public function run()
    {
        if ($this->getProcessor())
            echo $this->_action . "\n";
        else throw new Exception('Impossible de lancer le processus sans un processeur');
        return $this;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getSize()
    {
        return $this->_size;
    }

    public function setProcessor(ProcessingMethod $processor)
    {
        $this->_processor = $processor;
        return $this;
    }

    public function getProcessor()
    {
        return $this->_processor;
    }
}

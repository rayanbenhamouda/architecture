<?php

namespace Sourcecode;
use Library\Process;

class Fifo extends ProcessingMethod
{
	public function run()
	{
		foreach($this->_processesList as $process){
			$process->run();
		}
	}
}

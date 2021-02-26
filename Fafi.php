<?php

namespace Sourcecode;
use Library\Process;

class Fafi extends ProcessingMethod
{
	public function run()
	{
		usort($this->_processesList);
		foreach($this->_processesList as $process){
			$process->run();
		}
	}
}

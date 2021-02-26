<?php

namespace Sourcecode;
use Library\Process;

class Fafi extends ProcessingMethod
{
	public function run()
	{
		foreach($this->_size as $process){
			$process->run();
		}
	}
}

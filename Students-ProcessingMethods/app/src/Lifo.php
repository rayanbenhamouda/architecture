<?php

namespace Sourcecode;

class Lifo extends ProcessingMethod
{
	public function run()
	{
		$this->_processesList = array_reverse($this->_processesList);
		foreach($this->_processesList as $process){
			$process->run();
		}
	}
}

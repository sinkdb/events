<?php

PHPWS_Core::initModClass('events', 'AbstractFactory.php');

class ViewFactory extends AbstractFactory
{
	private $dir = 'view';

	public function getDirectory()
	{
		return $this->dir;
	}

	public function throwIllegal($name)
	{
		PHPWS_Core::initModClass('events', 'exception/IllegalViewException.php');
		throw new IllegalViewException("Illegal characters found in view {$name}");
	}

	public function throwNotFound($name)
	{
		PHPWS_Core::initModClass('events', 'exception/ViewNotFoundException.php');
		throw new ViewNotFoundException("Could not initialize view [$name}");
	}
}
?>
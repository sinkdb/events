<?php

class ShowHomeCommand extends Command {
	
	function getRequestVars(){
		return array('action'=>'ShowHome');
	}

	function execute(CommandContext $context)
	{
		$home = new HomeView();

		$context->setContent($home->show());
	}
}

?>
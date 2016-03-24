<?php
namespace events\command;
use events\CommandContext;
class ShowAdminHomeCommand extends \events\Command {
	
	function getRequestVars(){
		return array('action'=>'ShowAdminHome');
	}

	function execute(CommandContext $context)
	{		
		$home = new \events\AdminView();

		$context->setContent($home->show());
	}
}

?>

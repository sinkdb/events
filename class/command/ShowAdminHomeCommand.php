<?php
namespace events\command;
use events\CommandContext;
class ShowAdminHomeCommand extends \events\Command {
	
	function getRequestVars(){
		return array('action'=>'ShowAdminHome');
	}

	function execute(CommandContext $context)
	{
		//PHPWS_Core::initModClass('events','HomeView.php');
		
		$home = new \events\AdminView();

		$context->setContent($home->show());
		//var_dump($context);
	}
}

?>

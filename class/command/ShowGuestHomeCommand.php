<?php
namespace events\command;
use events\CommandContext;
class ShowGuestHomeCommand extends \events\Command {
	
	function getRequestVars(){
		return array('action'=>'ShowGuestHome');
	}

	function execute(CommandContext $context)
	{
		$home = new \events\GuestView();
		//$home = new \events\DetailView();

		$context->setContent($home->show());

	}
}

?>

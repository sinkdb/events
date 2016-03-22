<?php
namespace events\command;
use events\CommandContext;
class ShowAddEventCommand extends \events\Command {

	function getRequestVars(){
		return array('action'=>'ShowAddEvent');
	}

	function execute(CommandContext $context)
	{
		$form = new \events\AddView();

		$context->setContent($form->show());
	}
	
}
<?php
namespace events\command;
use events\CommandContext;
class AddEventCommand extends \events\Command {

	function getRequestVars(){
		return array('action'=>'AddEvent');
	}

	function execute(CommandContext $context)
	{
		$form = new \events\AddView();

		$context->setContent($form->show());
	}
	
}
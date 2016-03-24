<?php
namespace events\command;
use events\CommandContext;
class ShowEditEventCommand extends \events\Command {

	function getRequestVars(){
		return array('action'=>'ShowEditEvent');
	}

	function execute(CommandContext $context)
	{
		$edit = new \events\EditView();
		$edit->setEventID($context->get('edit'));

		$context->setContent($edit->show());
	}
	
}
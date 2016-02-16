<?php
namespace events\command;
use events\CommandContext;
class ShowEventDetailsCommand extends \events\Command {

	private $eventID;

	public function setEventID($id)
	{
		$this->eventID = $id;
	}
	
	function getRequestVars(){
		return array('action'=>'ShowEventDetails');
	}

	function execute(CommandContext $context)
	{
		$details = new \events\DetailView();

		//$context->setContent($home->show($eventID));
		$context->setContent($home->show(1));
	}
}
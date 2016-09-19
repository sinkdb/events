<?php
namespace events\command;
use events\CommandContext;
class DeleteEventCommand extends \events\Command {
	
	function getRequestVars(){
		return array('action'=>'DeleteEvent');
	}

	function execute(CommandContext $context)
	{
		$id = $context->get('delete');

		$db = \Database::getDB();
		$pdo = $db->getPDO();

		$query = "DELETE from events_events where id = :id";

		$sth = $pdo->prepare($query);
		$sth->execute(array('id'=>$id));
		header('Location: ./?action=ShowAdminHome');
	}
}
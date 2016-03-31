<?php
namespace events\command;
use events\CommandContext;
class EditEventDetailsCommand extends \events\Command {

	function getRequestVars(){
		return array('action'=>'EditEventDetails');
	}

	function execute(CommandContext $context)
	{
		$id = $context->get('edit');
		$event_name = $context->get('event_name');
		$event_location = $context->get('event_location');

		$event_date = (strtotime($context->get('event_date')) + 86399);
		var_dump($event_date);

		//exit;
		$ticket_prices = $context->get('ticket_prices');
		$ticket_location = $context->get('ticket_location');
		$open_time = $context->get('open_time');
		$start_time = $context->get('start_time');
		$event_restrictions = $context->get('event_restrictions');
		$artist_details = $context->get('event_details');
		var_dump($context);
		
		$db = \Database::getDB();
		$pdo = $db->getPDO();

		$query = "UPDATE events_events set eventname = :event_name, eventlocation = :event_location, eventdate = :event_date, ticketprices = :ticket_prices, ticketlocation = :ticket_location, 
					opentime = :open_time, starttime = :start_time, eventrestrictions = :event_restrictions, artistdetails = :artist_details where id = :id";

		$sth = $pdo->prepare($query);

		$sth->execute(array('event_name'=>$event_name, 'event_location'=>$event_location, 'event_date'=>$event_date, 'ticket_prices'=>$ticket_prices, 'ticket_location'=>$ticket_location, 'open_time'=>$open_time, 'start_time'=>$start_time, 'event_restrictions'=>$event_restrictions, 'artist_details'=>$artist_details, 'id'=>$id));

		//header('Location: ./?action=ShowAdminHome');
		//$cmd = \events\CommandFactory::getCommand('ShowAdminHome');
		//$cmd->redirect();
	}
	
}
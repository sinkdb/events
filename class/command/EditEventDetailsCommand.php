<?php
namespace events\command;
use events\CommandContext;
class EditEventDetailsCommand extends \events\Command {

	function getRequestVars(){
		return array('action'=>'EditEventDetails');
	}

	function execute(CommandContext $context)
	{
		$event_name = $context->get('event_name');
		$event_location = $context->get('event_location');
		$event_date = (strtotime($context->get('event_date')) + 86399);
		$ticket_prices = $context->get('ticket_prices');
		$ticket_location = $context->get('ticket_location');
		$open_time = $context->get('open_time');
		$start_time = $context->get('start_time');
		$event_restrictions = $context->get('event_restrictions');
		$artist_details = $context->get('event_details');
		
		$db = \Database::getDB();
		$pdo = $db->getPDO();
	
		//$query = "INSERT INTO events_events (id, eventname, eventlocation, eventdate, ticketprices, ticketlocation, opentime, starttime, eventrestrictions, artistdetails)
		//			VALUES (nextval('events_seq'), :event_name, :event_location, :event_date, :ticket_prices, :ticket_location, :open_time, :start_time, :event_restrictions, :artist_details)";

		//$query = "UPDATE events_events set  where id = ";

		//$sth = $pdo->prepare($query);

		//$sth->execute(array('event_name'=>$event_name, 'event_location'=>$event_location, 'event_date'=>$event_date, 'ticket_prices'=>$ticket_prices, 'ticket_location'=>$ticket_location, 'open_time'=>$open_time, 'start_time'=>$start_time, 'event_restrictions'=>$event_restrictions, 'artist_details'=>$artist_details));

		//$cmd = \events\CommandFactory::getCommand('ShowAdminHome');
		//$cmd->execute($context);
	}
	
}
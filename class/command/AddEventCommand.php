<?php
namespace events\command;
use events\CommandContext;
class AddEventCommand extends \events\Command {
	
	function getRequestVars(){
		return array('action'=>'AddEvent');
	}

	function execute(CommandContext $context)
	{
		//var_dump($context);
		$event_name = $context->get('event_name');
		$event_location = $context->get('event_location');
		$event_date = $context->get('event_date');
		$ticket_prices = $context->get('ticket_prices');
		$ticket_location = $context->get('ticket_location');
		$open_time = $context->get('open_time');
		$start_time = $context->get('start_time');
		$event_restrictions = $context->get('event_restrictions');
		$artist_details = $context->get('event_details');

		//if($event_name) check for null in the fields that cant be
		//convert give date in to timestamp
		//also add datepicker of some sort, or at least put a template in

		//echo $_POST['event_name'];
		
		$db = \Database::getDB();
	/*
		$query = "INSERT INTO events_events (id, eventname, eventlocation, imageid, eventdate, ticketprices, ticketlocation, opentime, starttime, eventrestrictions, artistdetails)
					VALUES (4, :event_name:, :event_location:, :imageid:, :event_name:, :ticket_prices:, :ticket_location:, :open_time:, :start_time:, :event_restrictions:, :artist_details:)";
					*/

		$query = "INSERT INTO events_events (id, eventname, eventlocation, eventdate, ticketprices, ticketlocation, opentime, starttime, eventrestrictions, artistdetails)
				VALUES (5, '$event_name', '$event_location', '$event_date', '$ticket_prices', '$ticket_location', '$open_time', '$start_time', '$event_restrictions', '$artist_details')";

		/*
		id
		eventname
		eventlocation
		imageid
		eventdate
		ticketprices
		ticketlocation
		opentime
		starttime
		eventrestrictions
		artistdetails
		videolink
		*/



		$pdo = $db->query($query);

	}
}
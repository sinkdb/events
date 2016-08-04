<?php
namespace events\command;
use events\CommandContext;
class AddEventCommand extends \events\Command {
	
	function getRequestVars(){
		return array('action'=>'AddEvent');
	}

	function execute(CommandContext $context)
	{
		$image_url = "https://placeholdit.imgix.net/~text?txtsize=33&txt=250%C3%97150&w=250&h=150";
		if($_FILES['event_image']['size'] > 0 and $_FILES['event_image']['size'] < 2097152)
		{
			$tempFile = $_FILES['event_image']['tmp_name'];   
			$targetPath = PHPWS_SOURCE_DIR . "mod/events/images/";
			$targetFile =  $targetPath. $_FILES['event_image']['name'];
			$image_url = "mod/events/images/" . $_FILES['event_image']['name'];
			move_uploaded_file($tempFile,$targetFile);
		}

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
	
		$query = "INSERT INTO events_events (id, eventname, eventlocation, eventdate, ticketprices, ticketlocation, opentime, starttime, eventrestrictions, artistdetails, imageurl)
					VALUES (nextval('events_seq'), :event_name, :event_location, :event_date, :ticket_prices, :ticket_location, :open_time, :start_time, :event_restrictions, :artist_details, :image_url)";

		$sth = $pdo->prepare($query);

		$sth->execute(array('event_name'=>$event_name, 'event_location'=>$event_location, 'event_date'=>$event_date, 'ticket_prices'=>$ticket_prices, 'ticket_location'=>$ticket_location, 'open_time'=>$open_time, 'start_time'=>$start_time, 'event_restrictions'=>$event_restrictions, 'artist_details'=>$artist_details, 'image_url'=>$image_url));

		header('Location: ./?action=ShowAdminHome');

	}
}
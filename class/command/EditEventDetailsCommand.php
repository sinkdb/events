<?php
namespace events\command;
use events\CommandContext;
class EditEventDetailsCommand extends \events\Command {

	function getRequestVars(){
		return array('action'=>'EditEventDetails');
	}

	function execute(CommandContext $context)
	{
		$image_url = $context->get('test_name');
		$id = $context->get('edit');
		$event_name = $context->get('event_name');
		$event_date = (strtotime($context->get('event_date')) + 68399);
		$ticket_information = $context->get('ticket_information');
		$open_time = $context->get('open_time');
		$start_time = $context->get('start_time');
		$event_restrictions = $context->get('event_restrictions');
		$artist_details = $context->get('event_details');

		if($_FILES['event_image']['size'] > 0 and $_FILES['event_image']['size'] < 2097152)
		{
			$tempFile = $_FILES['event_image']['tmp_name'];   
			$targetPath = PHPWS_SOURCE_DIR . "mod/events/images/";
			$targetFile =  $targetPath. $_FILES['event_image']['name'];
			$image_url = "mod/events/images/" . $_FILES['event_image']['name'];
			move_uploaded_file($tempFile,$targetFile);
		}
		
		$db = \Database::getDB();
		$pdo = $db->getPDO();

		$query = "UPDATE events_events set eventname = :event_name, eventdate = :event_date, 
					ticketinformation = :ticket_information, opentime = :open_time, 
					starttime = :start_time, eventrestrictions = :event_restrictions, 
					artistdetails = :artist_details, imageurl = :image_url where id = :id";

		$sth = $pdo->prepare($query);

		$sth->execute(array('event_name'=>$event_name,'event_date'=>$event_date, 
							'ticket_information'=>$ticket_information, 'open_time'=>$open_time, 
							'start_time'=>$start_time, 'event_restrictions'=>$event_restrictions, 
							'artist_details'=>$artist_details, 'id'=>$id, 'image_url'=>$image_url));

		header('Location: ./?action=ShowAdminHome');
	}
}
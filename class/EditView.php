<?php
namespace events;

class EditView extends \events\EventsView {

	public $eventID;

	public function setEventID($id)
	{
		$this->eventID = $id;
	}
	
	public function show()
	{
		if (!\UserStatus::isAdmin()){
			header('Location: ./?action=ShowGuestHome');
		}
		
		$tpl = array();

		\Layout::addPageTitle("Edit Event");

		$db = \Database::getDB();
		$query = "select * from events_events where id = '$this->eventID'";
		$pdo = $db->query($query);
		$result = $pdo->fetchAll();
		foreach ($result as $key => $value) 
		{
			$tpl['DETAILS'][$key] = $value;
		}
		for($i = 0; $i < count($tpl['DETAILS']); $i++)
		{
			$epoch = $tpl['DETAILS'][$i]['eventdate'];
			$formatted_date = new \DateTime("@$epoch");
			$formatted_date = $formatted_date->format('Y-m-d');
			$tpl['DETAILS'][$i]['eventdate'] = $formatted_date;
		}	

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'EditView.tpl'));
	}
}
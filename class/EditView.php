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
			$formatted_date = $formatted_date->format('M/d/Y');
			$final_date = "" . $formatted_date[0] . $formatted_date[1] . $formatted_date[2] . " " . $formatted_date[4] . $formatted_date[5];
			$tpl['DETAILS'][$i]['eventdate'] = $final_date;
		}

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'EditView.tpl'));
	}
}
<?php
namespace events;

class DetailView extends \events\EventsView {

	public $eventID;

	public function setEventID($id)
	{
		$this->eventID = $id;
	}

	public function getEventID()
	{
		return $this->eventID;
	}

	public function show()
	{
		$tpl = array();

		\Layout::addPageTitle("Event Details");

		//$eventID = $eventID;
		//$id = $this->eventID;
		$db = \Database::getDB();
		$query = "select * from events_events where id = '$this->eventID'";
		//$query = "select * from events_events where id = 1";
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

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'DetailView.tpl'));
	}
}
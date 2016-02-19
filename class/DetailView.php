<?php
namespace events;

class DetailView extends \events\EventsView {

	public $eventID;
/*
	public function __construct()
	{}
*/

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
		$pdo = $db->query($query);
		$result = $pdo->fetchAll();
		foreach ($result as $key => $value) 
		{
			$tpl['DETAILS'][$key] = $value;
		}

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'DetailView.tpl'));
	}
}
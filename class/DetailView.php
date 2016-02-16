<?php
namespace events;

class DetailView extends \events\EventsView {

	private $eventID;
/*
	public function __construct()
	{}
*/
	public function show($eventID)
	{
		$tpl = array();

		\Layout::addPageTitle("Event Details");

		$db = \Database::getDB();
		$query = "select * from events_events where id = '$eventID'";
		$pdo = $db->query($query);
		$result = $pdo->fetchAll();
		foreach ($result as $key => $value) 
		{
			$tpl['DETAILS'][$key] = $value;
		}

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'DetailView.tpl'));
	}
}
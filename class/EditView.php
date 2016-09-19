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
			$formatted_date = $formatted_date->format('Y-m-d');
			$tpl['DETAILS'][$i]['eventdate'] = $formatted_date;
		}	
		//$form = new \PHPWS_Form('edit-event');
		//$form->addHidden('module', 'blog');
		//$form->addTextArea('summary', 'event');
		//$tpl->useEditor('event_details');

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'EditView.tpl'));
	}
}
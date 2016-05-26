<?php
namespace events;

class AdminView extends \events\EventsView {
	
	public function show()
	{
		$tpl = array();

		\Layout::addPageTitle("Upcoming Events");

		$current_time = time();
		$db = \Database::getDB();
		$query = "select * from events_events where eventdate > '$current_time' order by eventdate";
		$pdo = $db->query($query);
		$result = $pdo->fetchAll();
		foreach($result as $key=>$value)
		{
			$tpl['EVENTS'][$key] = $value;

		}
		for($i = 0; $i < count($tpl['EVENTS']); $i++)
		{
			$epoch = $tpl['EVENTS'][$i]['eventdate'];
			$formatted_date = new \DateTime("@$epoch");
			$formatted_date = $formatted_date->format('M/d/Y');
			$final_date = "" . $formatted_date[0] . $formatted_date[1] . $formatted_date[2] . " " . $formatted_date[4] . $formatted_date[5];
			$tpl['EVENTS'][$i]['eventdate'] = $final_date;
		}
		
		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'AdminView.tpl'));
	}
}
<?php
namespace events;

class GuestView extends \events\EventsView {
	
	public function show()
	{
		$tpl = array();

		\Layout::addPageTitle("Upcoming Events");

		$current_time = 0;
		$db = \Database::getDB();
		//$query = "update events_events set artistdetails = 'Lorem ipsum dolor sit amet, per albucius perfecto maluisset eu, vix esse prodesset disputando et. Facete antiopam ad usu, minimum recteque erroribus his ex. Ei patrioque mnesarchum mea, lorem feugiat adversarium ex mei, ad facilis recteque ius. Ne eam iuvaret insolens gubergren, ius in facilis recusabo, pro habeo omnium reformidans et. Ad his eruditi recusabo. Brute semper aliquando vis te, dolor nemore sed ei. Ne has duis nostrud oporteat, mel in sint semper. Percipit repudiandae no sed, sea facete maiestatis et. Illum zril quidam at qui. Diam postea no vim. Ex vis equidem invenire, populo copiosae scribentur sit ea. Duis dolore ad pri, solum malorum suavitate quo ut. Rebum euismod eam ea, posse perpetua evertitur pro no, in audiam latine appareat est. Timeam dolorum interesset an eos. Id ius offendit singulis eloquentiam, ei odio iudicabit reformidans vis, at quando impetus suscipit vim. Mel ei detracto delicata, an ceteros legendos his. Libris dissentiet referrentur duo ei, per commodo fabulas in. Timeam volumus nec id. Nec dicant similique eu. Perpetua vituperata disputationi ei vel, his id ferri soluta, partem vulputate eam at. Vim partem patrioque cotidieque at. His ne volutpat ocurreret repudiandae, no mea atqui dolorem expetenda, velit corrumpit quo et. Tritani aliquam eam ex, sed eu dico mucius intellegam. Movet putant appetere mei ad. Eam civibus blandit lucilius et. Cum reque eruditi necessitatibus ad, natum scripta singulis ut pro, porro saepe argumentum at pri. Sed brute dicunt aliquam et, ut his fastidii oporteat urbanitas.' where id = 1";
		//$pdo = $db->query($query);
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

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'GuestView.tpl'));


	}
}
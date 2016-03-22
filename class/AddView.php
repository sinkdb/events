<?php
namespace events;

class AddView extends \events\EventsView {
	
	public function show()
	{
		$tpl = array();

		\Layout::addPageTitle("Add New Event");

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'AddView.tpl'));
	}
}
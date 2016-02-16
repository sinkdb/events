<?php
namespace events;

class DetailView extends \events\EventsView {
	public function show()
	{
		$tpl = array();

		\Layout::addPageTitle("Event Details");

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'DetailView.tpl'));
	}
}
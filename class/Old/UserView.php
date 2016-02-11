<?php 
namespace events;

//class UserView extends \events\EventsView {
class UserView extends EventsView {
	
	public function show()
	{
		$tpl = array();
		$tpl['NOTIFICATIONS'] = $this->notifications;
		//$tpl['MAIN'] = $this->getMain();
		$tpl['MAIN'] = "user.tpl";
		var_dump("user view");

		$this->showEvents(\PHPWS_Template::process($tpl, 'events', 'user.tpl'));
	}
}
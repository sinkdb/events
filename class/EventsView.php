<?php
namespace events;
abstract class EventsView extends View {
	private $main;
	//sidebar stuff?
	public $sidebar = array();

	protected $notifications;

	public function addNotifications($n)
	{
		$this->notifications = $n;
	}

	public function setMain($content)
	{
		//$this->content = $content;
		$this->main = $content;
	}

	public function getMain()
	{
		return $this->main;
	}

	public function showEvents($content)
	{
		$tpl = array();
		$tpl['MAIN'] = $content;
		
		\Layout::add(\PHPWS_Template::process($tpl, 'events', 'events.tpl'));
	}
}
?>
<?php
namespace events;
/**
* EventsFactory.php
*
* @author Devin Sink
*/

\PHPWS_CORE::initModClass('events','UserStatus.php');
\PHPWS_Core::initModClass('events', 'Command.php');
\PHPWS_Core::initModClass('events', 'View.php');

class EventsFactory
{
	private static $eventHandler;

	public static function getEvents()
	{
		$rh = getallheaders();

		if(isset(EventsFactory::$eventHandler)){
			return EventsFactory::$eventHandler;
		}

		else if (\UserStatus::isAdmin()){
			\PHPWS_CORE::initModClass('events', 'AdminEvents.php');
			EventsFactory::$eventHandler = new AdminEvents();
		}
		else {
			\PHPWS_CORE::initModClass('events', 'GuestEvents.php');
			EventsFactory::$eventHandler = new GuestEvents();
		}

		//EventsFactory::$eventHandler = new EventDetails();

		return EventsFactory::$eventHandler;
	}
}

?>
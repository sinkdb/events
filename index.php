<?php
namespace events;
if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../config/core/404.html';
    exit();
}

\PHPWS_Core::requireInc('events', 'defines.php');


\PHPWS_Core::initModClass('events', 'EventsFactory.php');


//eh = events handler
//$eh = new Events();

//events factory always returns adminevents right now

$controller = EventsFactory::getEvents();
$controller->process();

?>

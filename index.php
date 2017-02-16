<?php
namespace events;
if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../config/core/404.html';
    exit();
}

\PHPWS_Core::requireInc('events', 'defines.php');

\PHPWS_Core::initModClass('events', 'EventsFactory.php');

$controller = EventsFactory::getEvents();
$controller->process();
?>
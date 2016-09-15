<?php

define('EVENTS_USERSTATUS_GUEST', 'guest');
define('EVENTS_USERSTATUS_ADMIN', 'admin');

class UserStatus
{
	private final function __construct(){ }

	public static function isAdmin()
	{
		return Current_User::isLogged() &&
		Current_User::IsUnrestricted('events');
	}

	public static function isGuest()
	{
		return !Current_User::isLogged();
	}
}
?>
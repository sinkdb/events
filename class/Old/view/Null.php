<?php

PHPWS_Core::initModCLass('plm', 'View.php');

class Null extends EventsView
{
	public function getRequestVars()
	{
		return array('view'=>'Null');
	}
	public function display(Context $context)
	{
		return ("<h2>Look it did a thing</h2>");
	}
}
?>
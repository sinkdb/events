<?php
namespace events;
class AdminEvents extends Events 
{
	public function process()
	{
		$this->context->setDefault('action', 'ShowAdminHome');
		parent::process();

		$view = new AdminView();
		$view->setMain($this->context->getContent());

	}
}
?>
<?php
namespace events;
class GuestEvents extends Events
{
	public function process()
	{
		$this->context->setDefault('action', 'ShowGuestHome');
		parent::process();

		$view = new GuestView();
		$view->setMain($this->context->getContent());
		
	}
}
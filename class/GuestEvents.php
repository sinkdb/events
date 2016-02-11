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
		
		//parent::construct($main);
		//var_dump($result);
		//exit;
		//$view->setMain($result);


		//$view->show();
	}
}
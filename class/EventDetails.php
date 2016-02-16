<?php
namespace events;
class EventDetails extends Events
{
	public function process()
	{
		$this->context->setDefault('action', 'ShowEventDetail');
		parent::process();

		$view = new DetailView();
		$view->setMain($this->context->getContent());
	}
}
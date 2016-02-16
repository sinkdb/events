<?php
namespace events;
class EventDetails extends Events
{
	public function process()
	{
		$this->context->setDefault('action', 'ShowEventDetails');
		parent::process();

		$view = new DetailView();
		$view->setMain($this->context->getContent());
	}
}
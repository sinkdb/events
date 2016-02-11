<?php
namespace events;
abstract class View
{
	protected $pageTitle;

	public function setTitle($title){
		$this->pageTitle = $title;
		\Layout::addPageTitle($title);
	}

	public abstract function show();
}
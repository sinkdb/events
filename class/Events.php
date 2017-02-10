<?php
namespace events;
/**
* Events
*
*
* @author Devin Sink
*/

abstract class Events {

	protected $context;

	public function __construct()
	{
		$this->context = new CommandContext();
	}

	public function getContext()
	{
		return $this->context;
	}

	public function process()
	{
		$action = $this->context->get('action');
		$cmd = CommandFactory::getCommand($action);
		$cmd->execute($this->context);
	}

	public function getView()
	{
		$this->view->render();
	}

	public static function quit()
	{
		exit();
	}
}
?>
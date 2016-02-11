<?php

abstract class EventsView {

	abstract function getRequestVars();
	abstract function display(Context $context);

	public function initForm(PHPWS_Form $form)
	{
		$module = $form->get('module');
		if(PEAR::isError($module)){
			$form->addHidden('module', 'events');
		}

		foreach($this->getRequestVars() as $key=>$value){
			$form->addHidden($key, $value);
		}
		$form->setMethod('get');

	}

	public function getLink($text, $target = NULL, $cssClass = NULL, $title = NULL)
	{
		return PHPWS_Text::moduleLink(dgettext('events, $text'), 'events', $this->getRequestVars(), $target, $title, $cssClass);
	}

	function getURI(){
		$uri = $_SERVER['SCRIPT_NAME'] . "?module=events";
		$uri = 'index.php?module=events';
		foreach($this->getRequestVars() as $key=>$val) {
			if(is_array($val)){
				foreach($val as $key2=>$val2)
				$uri .= "&$key" . "[$key2]=$val2";
			}else{
				$uri .= "&$key=$val";
			}
		}
		return $uri;
	}

	function redirect(){
		NQ::close();
		header("Location: ".$this->getURI());
		exit();
	}
}

abstract class EventViewer extends EventsView
{
	private $main;

	public function setMain($content){
		$this->main = $content;
	}

	public function getMain()
	{
		return $this->main;
	}

	public function displayEvents($content)
	{
		$tpl = array();
		$tpl['MAIN'] = $content;
		//Layout::addStyle('events', 'css/events.css');
		return PHPWS_Template::process($tpl, 'events', 'events.tpl');
	}
}
?>
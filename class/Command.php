<?php
namespace events;
abstract class Command
{
	protected $context;

	abstract function getRequestVars();
	abstract function execute(CommandContext $context);

	function initForm(PHPWS_Form &$form)
	{
		$moduleElement = $form->get('module');
		if(PEAR::isError($moduleElement)) {
			$form->addHidden('module','events');
		}

		foreach($this->getRequestVars() as $key=>$val) {
			$form->addHidden($ket, $val);
		}
	}

	public function loadContext(CommandContext $context)
	{
		$context->unsetParam('module');
        $context->unsetParam('action');

        $this->context = $context;
	}

	function getURI()
	{
		$uri = $_SERVER['SCRIPT_NAME'] . "?module=events";

        foreach($this->getRequestVars() as $key=>$val) {
            if(is_array($val)) {
                foreach($val as $key2=>$val2)
                    $uri .= "&$key" . "[$key2]=" . rawurlencode($val2);
            }else{
                $uri .= "&$key=" . rawurlencode($val);
            }
        }

        return $uri;
	}

	public function getLink($text, $target = null, $cssClass = null, $title = null)
	{
        return PHPWS_Text::moduleLink(dgettext('events', $text), 'events', $this->getRequestVars(), $target, $title, $cssClass);

	}

	function redirect()
	{
        $path = $this->getURI();
        NQ::close();

        header('HTTP/1.1 303 See Other');
        header("Location: $path");
        Events::quit();
	}
}
?>
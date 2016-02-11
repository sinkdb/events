<?php
namespace events;
class CommandContext {
	
	private $params = array();
	private $error = "";
	private $content = "";
	private $successCommand = null;
	private $rewritten  = FALSE;

	private $postdata = null;

	function __construct()
	{
		foreach($_REQUEST as $key => $val) {
			if(!empty($val) || $val == "0" || $val ==0){
				$this->addParam($key, $val);
			}
		}

		if(!isset($_SERVER['REDIRECT_URL'])) $this->rewritten = FALSE;
		else if(empty($_SERVER['QUERY_STRING'])) $this->rewritten  = TRUE;
		else $this->rewritten = FALSE;

		if($this->get('events_goback')) {
			$this->loadLastContext();
		} else if($this->get('events_load')) {
			$this->loadContext();
		}

		$this->postdata = file_get_contents('php://input');
	}

	    public function addParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    public function get($key)
    {
        if(!isset($this->params[$key]))
        return NULL;

        return $this->params[$key];
    }

    public function setParams(Array $params)
    {
    	foreach($params as $key => $value)
        {
        	$this->addParam($key, $value);
        }
    }
    
    public function clearParams()
    {
    	$this->params = array();
    }

     public function getParams()
    {
        return array_diff_key($this->params, array('module'=>'','action'=>''));
    }

    public function unsetParam($key)
    {
        unset($this->params[$key]);
    }

    function plugObject($obj)
    {
        return PHPWS_Core::plugObject($obj, $this->params);
    }

    function setDefault($key, $val)
    {
        if(!isset($this->params[$key]))
        $this->params[$key] = $val;
    }

    function setError($error)
    {
        $this->error = $error;
    }

    function getError()
    {
        return $this->error;
    }

    function setContent($content)
    {
        $this->content = $content;
    }

    function getContent()
    {
        return $this->content;
    }

    function isRewritten()
    {
        return $this->rewritten;
    }

    public function getPostData()
    {
        return $this->postdata;
    }

    public function getJsonData()
    {
        return json_decode($this->postdata, true);
    }

    function saveLastContext()
    {
        $_SESSION['Events_Last_Context'] = $this->params;
    }

    function loadLastContext()
    {
        $this->params = $_SESSION['Events_Last_Context'];
    }

    function saveContext()
    {
        $_SESSION['Events_Saved_Context'] = $this->params;
    }

    function loadContext()
    {
        if(isset($_SESSION['Events_Saved_Context']) && !empty($_SESSION['Events_Saved_Context'])) {
            $this->params = $_SESSION['Events_Saved_Context'];
        }
    }

    function redirectToSavedContext()
    {
        $path = $_SERVER['SCRIPT_NAME'].'?module=events&events_load=true';

        header('HTTP/1.1 303 See Other');
        header("Location: $path");
        Events::quit();
    }

    static function goBack()
    {
        $path = $_SERVER['SCRIPT_NAME'] . '?module=events&events_goback=true';

        header('HTTP/1.1 303 See Other');
        header("Location: $path");
        Events::quit();
    }
}
<?php
namespace events;
class CommandFactory {
    private static $dir = 'command';

    static function getCommand($action = 'Default')
    {
        if(is_null($action)) {
            $action = 'Default';
        }

        $class = self::staticInit($action);

        $cmd = new $class();
        return $cmd;
    }

    static function onAllCommands($obj, $func)
    {
        $dir = self::$dir;

        $files = scandir("{$dir}/");

        foreach($files as $file) {
            $cmd = preg_replace('Command\.php$', '', $file);
            if($cmd == $file) continue;

            $obj->$func($file, $cmd);
        }
    }

    static function staticInit($action)
    {
        $dir = self::$dir;

        /*if(preg_match('/\W/', $action)) {
            PHPWS_Core::initModClass('events', 'exception/IllegalCommandException.php');
            throw new IllegalCommandException("Illegal characters in command {$action}");
        }*/

        $class = 'events\\command\\'.$action.'Command';

        /*try {
            PHPWS_Core::initModClass('events', "{$dir}/{$class}.php");
        }catch(Exception $e){
            PHPWS_Core::initModClass('e', 'exception/CommandNotFoundException.php');
            throw new CommandNotFoundException("Could not initialize {$class}: {$e->getMessage()}");
        }*/
        //PHPWS_Core::initModClass('events', "{$dir}/{$class}.php");
        return $class;
    }
}
?>
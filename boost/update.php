<?php

/**
 * update.php - FaxMaster update script
 *
 */

function events_update(&$content, $currentVersion)
{
    /*switch($currentVersion){
        case version_compare($currentVersion, '0.1.0', '<'):
            $db = new PHPWS_DB();
            $result = $db->importFile(PHPWS_SOURCE_DIR . 'mod/faxmaster/boost/update-0.1.1.sql');
            if(PEAR::isError($result)){
                return $result;
            }*/
    return true;
}

?>

<?php
/**
 * @author Jeremy Booker <jbooker at tux dot appstate dot edu>
*/

function events_uninstall(&$content) {

    /*
    PHPWS_DB::dropTable('skeleton_skeletons');
    PHPWS_DB::dropTable('skeleton_bones');
    $content[] = dgettext('skeleton', 'Skeleton tables dropped.');
    */

    return true;
}
?>

<?php

// A Bunch of Helper Functions. Probably a better way to do this.
class Helper {

    // Show Active LI Tag
    public static function showActive($pageVar, $currPage, $includeTag) {
        if ($pageVar == $currPage) {
            if ($includeTag)
                echo 'class="active"';
            else
                echo ' active';
        }
    }

}

?>

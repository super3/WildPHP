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
    
    // Show Tutorial Block
    public static function showBlock($title, $url, $img, $desc) {
        echo "<div class=\"span4\">";
        echo "<a href=\"$url\"><img src=\"$img\" alt=\"$title\"></a>";
        echo "<h5><a href=\"$url\">$title</a></h5>";
        echo "<p>$desc</p>";
        echo "</div>";
    }

}

?>

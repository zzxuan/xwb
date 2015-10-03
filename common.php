<?php
date_default_timezone_set('PRC');


function jumpto($url)
{
    echo "<script language=\"javascript\">";
    echo "document.location=\"" . $url . "\"";
    echo "</script>";
}



?>
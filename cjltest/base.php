<?php
function __autoload($classname)
{
    $fname=$classname.'.php';
    if(file_exists($fname))
    {
        require_once($fname);
    }

}
?>
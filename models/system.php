<?php

function template( $fname, $vars = [] ){
	extract($vars);
	
	ob_start();
    include "views/$fname.php";
    return ob_get_clean();
}

function debug ($string)
{
    echo "<pre>";
        print_r($string);
    echo "</pre>";
}




<?php

    function __autoload($classname) 
    {
        $filename = 'classes/' . $classname . '-class.php';
        include_once($filename);
    }
	
	$page = new HTMLbuilder('header.partial.php', 'body.partial.php', 'footer.partial.php');

?>

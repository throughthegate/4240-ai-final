<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	Home page of phone
";

//plugs the $content into the iphone template file.
include_once('includes/iphoneTemplate.php');
?>
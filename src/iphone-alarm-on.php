<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='alarm-on' class='iphone-app' >
	</div>
	<a href='iphone-alarm-off.php' id='alarm-toggle'> &nbsp; </a>
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
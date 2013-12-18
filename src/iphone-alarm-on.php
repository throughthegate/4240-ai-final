<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='alarm-on' class='iphone-app' >
	</div>
	<a href='iphone-alarm.php' id='alarm-toggle' class='div-link'> &nbsp; </a>
	<div id='notification-info' data-msg='Turned alarm on' data-time=1000> 
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
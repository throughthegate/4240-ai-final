<?php
include_once('includes/firstLine.php'); //include this to check sessions.

$alarm_on = get_quote("alarm_on");

//all content goes into $content variable
$content = "
	<div id='alarm-on' class='iphone-app' >
	</div>
	<a href='iphone-alarm.php' id='alarm-toggle' class='div-link'> &nbsp; </a>
	<div id='notification-info' data-msg='$alarm_on' data-time=2000> 
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
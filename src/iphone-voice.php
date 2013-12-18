<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='voice-home' class='iphone-app' >
	</div>
	<a href='iphone-voice-weather.php' id='voice-weather-link'  class='div-link voice-link trigger-load' data-load='Processing...'> &nbsp; </a>
	<a href='iphone-voice-text.php' id='voice-text-link' class='div-link voice-link trigger-load' data-load='Processing...'> &nbsp; </a>
	<a href='iphone-voice-search.php' id='voice-search-link' class='div-link voice-link trigger-load' data-load='Processing...'> &nbsp; </a>
	<div id='notification-info' data-msg='Turned on voice - how can I help you?' > 
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
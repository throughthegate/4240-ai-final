<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='voice-weather' class='iphone-app' >
	</div>
	<a href='iphone-voice.php' id='voice-back' class='div-link'> &nbsp; </a>
	<div id='notification-info' data-msg='Weather info' > 
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
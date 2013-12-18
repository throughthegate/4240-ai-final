<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='voice-text' class='iphone-app' >
	</div>
	<a href='iphone-voice.php' id='voice-back' class='div-link'> &nbsp; </a>
	<div id='notification-info' data-msg='Text Molly' > 
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
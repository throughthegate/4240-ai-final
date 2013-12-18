<?php
include_once('includes/firstLine.php'); //include this to check sessions.

$voice_search = get_quote("voice_search");

//all content goes into $content variable
$content = "
	<div id='voice-search' class='iphone-app' >
	</div>
	<a href='iphone-voice.php' id='voice-back' class='div-link'> &nbsp; </a>
	<div id='notification-info' data-msg='$voice_search' > 
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
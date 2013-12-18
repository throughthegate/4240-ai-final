<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='lock-screen' class='iphone-app' >
	</div>
	<!--use turn-off because same position as the alarm scrren-->
	<a href='iphone-home.php' id='turn-off' class='div-link message-link alarm-trigger-link' data-msg='Welcome' >
		&nbsp; 
	</a>
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='chat-sent' class='iphone-app' >
	</div>
	<div id='notification-info' data-msg='Sent SMS' data-time=1000> 
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
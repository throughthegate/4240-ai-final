<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='calendar-add' class='iphone-app' >
	</div>
	<a href='iphone-calendar.php' id='add-event' class='div-link calendar-link message-link' data-msg='Adding event' >
		&nbsp; 
	</a>
	<a href='iphone-calendar.php' id='cancel-event' class='div-link calendar-link'>
		&nbsp; 
	</a>
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
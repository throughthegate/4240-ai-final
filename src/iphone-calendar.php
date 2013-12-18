<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='calendar' class='iphone-app' >
	</div>
	<a href='iphone-calendar-add.php' id='calendar-add-page' class='div-link' > 
		&nbsp; 
	</a>
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='alarm-off' class='iphone-app' >
	</div>
	<a href='iphone-alarm-on.php' id='alarm-toggle' class='div-link' > 
		&nbsp; 
	</a>
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='off' class='iphone-app' >
		<p class='text-center'>(Tap screen to turn on)</p>
	</div>
	
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
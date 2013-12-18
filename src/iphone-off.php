<?php
include_once('includes/firstLine.php'); //include this to check sessions.
$device_start = get_quote("device_start");
//all content goes into $content variable
$content = "
	<div id='off' class='iphone-app' >
		<p class='text-center'>(Tap screen to turn on)</p>
	</div>
	<a href='iphone-home.php' id='on-screen'  class='div-link voice-link trigger-load' data-load='Initializing... <br/><br/> \"$device_start\" ' data-time=3500> &nbsp; </a>
	
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
<?php
include_once('includes/firstLine.php'); //include this to check sessions.

$deviceShut = get_quote("device_shut");
//all content goes into $content variable
$content = "
	<div id='off' class='iphone-app' >
		
	</div>
	<div id='load-info' data-href='iphone-off.php'  data-load='Shutting Down... <br/><br/> \"$deviceShut\"' data-time=3500 data-load-true='true'> &nbsp; </a>
	
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
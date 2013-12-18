<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div id='trigger-alarm' class='iphone-app' >
	</div>
	<a href='iphone-home.php' id='snooze' class='div-link message-link alarm-trigger-link' data-msg='Hit snooze' data-time=3000 onClick='playPause()'>
		&nbsp; 
	</a>
	<a href='iphone-home.php' id='turn-off' class='div-link message-link alarm-trigger-link' data-msg='Hit turn off' data-time=3000 onClick='playPause()' >
		&nbsp; 
	</a>
	<audio autoplay loop id='alarmAudio'>
	  <source src='includes/laughing-bird.mp3' type='audio/mpeg'>
	  <source src='includes/laughing-bird.wav' type='audio/wav'>
		Your browser does not support the audio element.
	</audio>
	
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
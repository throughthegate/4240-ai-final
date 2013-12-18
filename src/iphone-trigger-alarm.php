<?php
include_once('includes/firstLine.php'); //include this to check sessions.

$alarm_snooze = get_quote("alarm_snooze");

//all content goes into $content variable
$content = "
	<div id='trigger-alarm' class='iphone-app' >
	</div>
	<a href='iphone-home.php' id='snooze' class='div-link message-link alarm-trigger-link' data-msg='$alarm_snooze' data-time=2500 onClick='playPause()'>
		&nbsp; 
	</a>
	<a href='iphone-home.php' id='turn-off' class='div-link  alarm-trigger-link' onClick='playPause()' >
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
<?php
include_once('includes/firstLine.php'); //include this to check sessions.

//all content goes into $content variable
$content = "
	<div class='icon-row first-icon-row'>
		<div class='icon text-center'>
			<a href='iphone-calendar.php'>
				<img src='img/icons/calendar-01.png' /><br/>
				Calendar
			</a>
		</div>
		<div class='icon text-center'>
			<a href='iphone-alarm.php' class='message-link' data-msg='Test Message.' data-load='true' data-time=1000>
				<img src='img/icons/alarm-01.png' /><br/>
				Alarm Clock
			</a>
		</div>
		<div class='icon text-center'>
			<img src='img/icons/chat-01.png' /><br/>
			Chat
		</div>
		<div class='icon placeholder text-center'>
			<img src='img/icons/placeholder-01.png' /><br/>
			Lorem Ipsum
		</div>
	</div>
";
for($j=1; $j<=2; $j++){
	$content .= "<div class='icon-row'>";
	for($i=1; $i<=4; $i++){
		if($j==2 && $i==4){
			$content .="";
		}
		else{
			$content.="
			<div class='icon placeholder text-center'>
					<img src='img/icons/placeholder-01.png' /><br/>
					Lorem Ipsum
			</div>
			";
		}
	}
	$content .= "</div>";
}

$content .= "
	<div class='icon-row bottom-row '>
		<p class='text-center'>
			<a href='iphone-voice.php'><img src='img/icons/voice_command-01.png' /></a>
			<br/>
			
		</p>
	</div>
";

//plugs the $content into the iphone template file.
include_once('iphoneTemplate.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>iPhone</title>
	<!--reset CSS-->
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<!-- main CSS-->
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<!-- iphone CSS-->
	<link rel="stylesheet" type="text/css" href="styles/iphone.css">
</head>

<body>
	<div id='iphone-body'>
		<div id='status-bar'>
			<?php 
			$time = date('g:i A');
			print "<p class='text-center'>$time</p>"
			?>
		</div>
		
		<?php
		//print the content
		print $content;
		?>
	
	</div>	
</body>

</html>
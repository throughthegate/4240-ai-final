<?php
include_once('includes/firstLine.php'); //include this to check sessions.

?>
<!DOCTYPE html>
<html>
<head>
	<title>Phone "AI"</title><t
	<!--reset CSS-->
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<!-- main CSS-->
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>

<body>
    <h1>HELLO</h1>
	<?php

	
	print "
		<form action='' method='post'>
			Enter your name: <input type='text' name='name' value='".$_SESSION['name']."' />
			<input type='submit' value='Update your name'>
		</form>
	";
	
	?>
</body>

</html>
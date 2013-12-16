<?php
include_once('includes/firstLine.php'); //include this to check sessions.

?>
<!DOCTYPE html>
<html>
<head>
	<title>Phone "AI"</title>
	<!--reset CSS-->
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<!-- main CSS-->
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>

<body>
	<div id='header'>
	<?php
	//if they submit the form to change their name
	if(!empty($_POST['changeName'])){
		$name = trim(strip_tags($_POST['name']));
		$_SESSION['name'] = $name;
		//if they submit an empty name, change it to John/Jane Doe
		if(empty($name)){
			$_SESSION['name'] = "John/Jane Doe";
		}
	}
	
	print "<h1>Hello, " . $_SESSION['name'] . "</h1>";
	
	//form for changing name
	print "
		<form action='' method='post' name='changeName'>
			Enter your name: <input type='text' name='name' value='".$_SESSION['name']."' />
			<input type='submit' value='Update your name' name='changeName'/>
		</form>
	";
	
	?>
	</div>
</body>

</html>
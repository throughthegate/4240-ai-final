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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="diag_panel.js"></script>

</head>

<body>
	<!--header div-->
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
        
        //if they click the button to reroll their traits
        if(!empty($_POST['rerollTraits'])){
            generate_traits();
        }
	
	print "<p class='float-left'>Hello, " . $_SESSION['name'] . "</p>";
	
	//form for changing name
	print "
		<form class='float-right' action='' method='post' name='changeName'>
			Enter your name: <input type='text' name='name' value='".$_SESSION['name']."' />
			<input type='submit' value='Update your name' name='changeName'/>
		</form>
	";
	?>
	</div>
	
	<!-- iphone div -->
	<div id='iphone-div'>
		<iframe id='iphone-iframe' src='iphone-home.php'  width='320' height='480' seamless='seamless' frameborder="0" allowtransparency="true" scrolling="no">Iframe of iphone</iframe>
	</div>
        
        <!-- diagnostics div -->
        <div id='diagnostics'>
            <?php
            echo "<p>Trait 1:".$_SESSION['trait1']."<br />"."<p>Trait 2:".$_SESSION['trait2']."<br />"."<p>Trait 3:".$_SESSION['trait3']."<br />";
            echo "<br /><br />";
            
            //Button that allows user to reroll their AI's traits
            print "
                <form action='' method='post'>
                    <input type='submit' value='Get New Traits' name='rerollTraits'>
                </form>  
            ";
            ?>
            
        </div>
</body>

</html>
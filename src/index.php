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
		<iframe id='iphone-iframe' name='iphone-iframe' src='iphone-home.php'  width='320' height='480' seamless='seamless' frameborder="0" allowtransparency="true" scrolling="no">Iframe of iphone</iframe>
		<a id='home-button' class='text-center div-link' target='iphone-iframe' href="iphone-home.php">&nbsp;</a>
		<a id='lock-button' class='div-link text-center' target='iphone-iframe' href="iphone-lock.php">Lock Phone</a>
		<a id='off-button' class='div-link text-center' target='iphone-iframe' href="iphone-off-load.php">Turn Off</a>
                <img src="img/icons/text_bubble-01.png" id="speech_bubble"></img>
                <p id="speech_b_text">Please don't throw me away, <?php echo $_SESSION['name'] ?>! Let's live a happy life together!</p>
        </div>
        
        <!-- diagnostics div -->
        <div id='diagnostics'>
            <?php
            echo "<h1>About This Site</h1><br /><br /><br />";
            echo "<p>This is a simulation of a 'personal AI,' a form of mobile artificial intelligence that seeks to emulate the "
            . "various emotions found in human beings.  Through acting the part of being a living, breathing entity with ideas and ".
            "feelings, this AI extends the average usage lifetime of smartphones, thereby reducing the production of E-waste in the long run.  "
            ."<br /><br />In order to prevent the AI from being overly unpleasant while preserving the negative elements that come with all people, ".
            "we created two separate lists of positive and negative traits.  Your AI comes with two positive traits and one negative trait, which "
            ."you can randomize using the button below.</p>";
            echo "<br /><br />"; 
            echo "<h2><u>Your AI's Current Traits:</u></h2><br />";
            for($i=1; $i<4; $i++){
                echo "<h2>".ucfirst($_SESSION['trait'.$i])."</h2><br />";
            }
            //echo "<p>Trait 1: ".ucfirst($_SESSION['trait1'])."<br />"."<p>Trait 2: ".ucfirst($_SESSION['trait2'])."<br />"."<p>Trait 3: ".ucfirst($_SESSION['trait3'])."<br />";
            echo "<br /><br />";
            
            //Button that allows user to reroll their AI's traits
            print "
                <form action='' method='post'>
                    <input type='submit' value='Get New Traits' name='rerollTraits' id='rerollTraits'>
                </form>  
            ";
            ?>
            
        </div>
        
        <!-- active area div - diagnostics div shows up when this div is moused over -->
        <div id='activate_d'>
            <h1 id="hoverprompt"> &gt;&gt; Mouse over to see details. &lt;&lt</h1>
        </div>
</body>

</html>
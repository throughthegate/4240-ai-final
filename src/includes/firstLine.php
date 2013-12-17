<?php
session_start();
/*
	Safety check - if no name is set, give it a default name. 
*/
if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
	$_SESSION['name'] = "John/Jane Doe";
}

/* Timezone default set to new york*/
date_default_timezone_set('America/New_York');

/*
	Safety check on the 3 traits
*/
//include_once('ai.php');
//TODO - generate 3 attributes


?>
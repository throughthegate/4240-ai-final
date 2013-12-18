<?php
session_start();
ini_set('short_open_tag','0');
include_once('ai.php');
/*
	Safety check - if no name is set (1st time), give it a default name. 
*/
if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
	$_SESSION['name'] = "John/Jane Doe";
	
}
if(!isset($_SESSION['trait1']) || empty($_SESSION['trait1'])){
//since this is the first visit, generate random traits
	generate_traits();
}



/* Timezone default set to new york*/
date_default_timezone_set('America/New_York');



?>
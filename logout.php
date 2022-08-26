<?php

	require "includes/functions.php";
	 
	session_start();
	
	$_SESSION = [];
	session_destroy();
	header("Refresh:0; url=index.php");
	exit();
	
?>

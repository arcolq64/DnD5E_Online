<?php
	
	/* Database connection */
	
	$servername = "localhost";
	$username = "arcwebde_connect";
	$password = "Aq1C/ar0";
	$dbname = "arcwebde_dnd5e_online";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		printf("DB Connection failed: %s\n", mysqli_connect_error());
		echo "<br>";
		echo "Error: Unable to connect to MySQL." . "<br>";
		echo "Inform Alan.";
		exit();
	}

?>
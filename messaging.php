<?php
	
	// $_POST["name"] = "Alan";
	// $_POST["comment"] = "I anticipate a start date of July 7th.";
	
	if(!empty($_POST["name"]) && !empty($_POST["comment"]))
	{
		date_default_timezone_set('America/Vancouver');
		$unixtime = new DateTime();							// login day/time
		$loginstr = $unixtime->format('Y-m-d H:i:s');		// Y-m-d & H:i:s
		
		$insertComments = "INSERT INTO comments (parent_id, comment, sender, date) VALUES ('".$_POST["commentId"]."', '".$_POST["comment"]."', '".$_POST["name"]."', '".$loginstr."')";
		
		// $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DATABASE);
		// $result = mysqli_query($conn,"DESCRIBE students");
		
		include_once("db_connect.php");
		mysqli_query($conn, $insertComments) or die("database error: ". mysqli_error($conn));
		$message = '<label class="text-success">Message posted Successfully.</label><br><br>';
		$status = array
		(
			'error' => 0,
			'message' => $message
		);
	} 
	else 
	{
		$message = '<label class="text-danger">Error: Comment not posted. Inform Alan.</label><br><br>';
		$status = array
		(
			'error' => 1,
			'message' => $message
		);
	}
	
	echo json_encode($status);
	
?>
<?php

	require 'includes/functions.php';
	
	if(count($_POST) > 0 && $_GET['from'] == 'signup')
	{
		$check = checkSignUp($_POST);			// 4 entry fields
		$scroll = $_REQUEST['scroll']; 			// scroll parameter
		
		if($check !== true)
		{
			// Expire the error_message cookie after it is received in signup.php.
			setcookie("system_message", $check);
			header("Refresh:0; url=index.php?scroll=$scroll");
			exit();
		} 
		else
		{
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$email = trim($_POST['email']);
			$passwordHash = md5($password . SALT);
			
			$userfound = false;		// If a username is not found, this will remain false
			
			//-----------------------------------------------
			// If users.txt exists ...
			// Determine if a username entry exists.
			// The aim is to avoid duplicate entries.
			//-----------------------------------------------
			
			$file_pointer = 'text/users.txt';
			if(file_exists($file_pointer)) 
			{
				$lines = file('text/users.txt');
				
				// for each line of the $lines array, alias it to $line
				foreach ($lines as $line)
				{
					// Split $line by the regex pattern - just a @ in this case
					// the pieces from the split are returned in an array and stored in $pieces
					$pieces = preg_split('/\|/', $line);
					
					if($username == trim($pieces[1])) {	// Valid Username
						$userfound = true;				// If true, record is found
					}
				}					
			}
			
			if($userfound == false) 
			{
				date_default_timezone_set('America/Vancouver');
				$unixtime = new DateTime();							// login day/time
				$loginstr1 = $unixtime->format('U');				// Unix time
				$loginstr2 = $unixtime->format('Y-m-d H:i:s');		// Y-m-d & H:i:s
				$value1 = 1;
				$value2 = 1;
				
				// Retrieve last users.txt record number and determine next increment
				if (file_exists('text/users.txt'))
				{
					$line = '';
					$f = fopen('text/users.txt', 'r');
					$cursor = -1;
					fseek($f, $cursor, SEEK_END);
					$char = fgetc($f);
				
					while ($char === "\n" || $char === "\r") 
					{
						fseek($f, $cursor--, SEEK_END);
						$char = fgetc($f);
					}

					while ($char !== false && $char !== "\n" && $char !== "\r") 
					{
						$line = $char . $line;
						fseek($f, $cursor--, SEEK_END);
						$char = fgetc($f);
					}

					$pieces = preg_split('/\|/', $line);
					$value1 = (int)$pieces[0] + 1;
				}
				
				// Retrieve last progress.txt record number and determine next increment
				if (file_exists('text/login.txt'))
				{
					$line = '';
					$f = fopen('text/login.txt', 'r');
					$cursor = -1;
					fseek($f, $cursor, SEEK_END);
					$char = fgetc($f);
				
					while ($char === "\n" || $char === "\r")
					{
						fseek($f, $cursor--, SEEK_END);
						$char = fgetc($f);
					}

					while ($char !== false && $char !== "\n" && $char !== "\r") 
					{
						$line = $char . $line;
						fseek($f, $cursor--, SEEK_END);
						$char = fgetc($f);
					}

					$pieces = preg_split('/\|/', $line);
					$value2 = (int)$pieces[0] + 1;
				}
				
				// record the new user into a flat file named users.txt 
				$fp1 = fopen("text/users.txt", "a+");
				$fw1 = fwrite($fp1, $value1 . '|' . $username . '|' . $passwordHash . 
					'|' . $email . PHP_EOL);
				fclose($fp1);
				
				// record the new user's login time into a flat file named login.txt 
				$fp2 = fopen("text/login.txt", "a+");
				$fw2 = fwrite($fp2, $value2 . '|' . $username . '|' . 
					'|' . $loginstr1 . '|' . $loginstr2  . PHP_EOL);
				fclose($fp2);
				
				if($fw1 && $fw2) 
				{
					// setcookie('username', $username, time() + (86400 * 30), "/");
					header('Location: thankyou.php?type=signup&username='.$username);
					exit();
				} 
				else
				{
					// Set cookie to expire after post_message is processed.
					setcookie("system_message", "Database Error!<br>Inform Alan");
					header("Refresh:0; url=index.php?scroll=$scroll");
					exit();
				}
			} 
			else 
			{
				setcookie('system_message', 'Username not available.');
				header('Location: index.php');
			}
		}
		
		exit();
		
	} 
	
	if(count($_POST) > 0 && $_GET['from'] == 'login')
	{
		$unpw_ok   = false;
		$check = checkLogin($_POST);			// 4 entry fields
		$scroll = $_REQUEST['scroll']; 			// scroll parameter
		
		if($check !== true)
		{
			// Expire the error_message cookie after it is received in signup.php.
			setcookie("system_message", $check);
			header("Refresh:0; url=login.php?scroll=$scroll");
			exit();
		} 
		else
		{
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			
			if(validateUN($username) !== '')
			{
				$unpw_ok = findUser($username, $password);
			} 
			else 
			{
				setcookie('system_message', 'Transmission Error.<br>Try again.');
				header("Refresh:0; url=login.php?scroll=$scroll");
				exit();
			}
			
			if($unpw_ok)
			{
				// Session stuff ...
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $username;
				
				// Update login.txt
				
				date_default_timezone_set('America/Vancouver');
				$unixtime = new DateTime();
				$loginstr1 = $unixtime->format('U');				// Unix time
				$loginstr2 = $unixtime->format('Y-m-d H:i:s');		// Y-m-d & H:i:s
				
				$lines = file('text/login.txt');

				if($lines != false)
				{
					// w truncates the file
					$fp = fopen('text/login.txt', 'w');

					// comb through all existing lines
					foreach($lines as $line)
					{
						$pieces = preg_split("/\|/", $line);

						if($pieces[1] == trim($username))
						{
							$string = $pieces[0] . "|" . $username . "|" . $loginstr1 . "|" . $loginstr2 . PHP_EOL;
							fwrite($fp,$string);
							continue;
						}

						fwrite($fp, $line); // re-write this line
					}

					fclose($fp);
				}
				
				header("Location: thankyou.php?type=login&username=".$username);
				exit();
			}
			else
			{
				setcookie('system_message', 'Login not found! Try again.');
				header("Refresh:0; url=index.php?scroll=$scroll");
				exit();
			}

			exit();
			
		}
	}

	// should never reach here but if we do, back to index they go
	header('Location: index.php');
	exit();

?>
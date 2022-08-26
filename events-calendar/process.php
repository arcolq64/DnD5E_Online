<?php

	require '../includes/functions.php';
	
	session_start();
	
	$id = $_POST['game_id'];
	
	$file_pointer = '../text/facebook.txt';
	if(file_exists($file_pointer)) 
	{
		// Read file ...
		
		$lines = file('../text/facebook.txt');
		foreach ($lines as $line)
		{
			$pieces = preg_split('/\|/', $line);
			if($id == trim($pieces[0]))
			{
				$gameid = $pieces[0];
				$gamenm = $pieces[1];
				$gamedt = $pieces[2];
				$gamest = $pieces[3];
			}
		}
		
		if($gamest == 0) 
		{
			echo "No game seats available for this date.";
			exit();
		} 
		else
		{
			// Check if seat is already reserved
				
			echo $id . "<br><br>";
			
			$recfound = false;
			
			$lines = file('../text/gameseats.txt');
			
			foreach ($lines as $line)
			{
				$pieces = preg_split('/\|/', $line);
				
				if($id == trim($pieces[1]) && $_SESSION['username'] == trim($pieces[2]))
				{
					$recfound = true;				// If true, record is found
				}
			}
			
			if($recfound) 
			{
				setcookie("system_message", "Seat Already Reserved.", time() + (86400 * 60), "/");
				$url = '../account.php';
				header("Refresh:0; url=$url");
				exit();
				
			}
			else 
			{				
				$gamest -= 1;
			
				// Replace row in file ...
				
				$lines = file('../text/facebook.txt');

				if($lines != false)
				{
					$fp = fopen('../text/facebook.txt', 'w');

					foreach($lines as $line)
					{
						$pieces = preg_split("/\|/", $line);
						if($id == trim($pieces[0]))
						{
							$string = $gameid . "|" . $gamenm . "|" . $gamedt . "|" . $gamest .  PHP_EOL;
							fwrite($fp,$string);
							continue;
						}
						
						fwrite($fp, $line);
					}
					
					fclose($fp);
				}
				
				// Retrieve last gameseats.txt record number and determine next increment
				
				if (file_exists('../text/gameseats.txt'))
				{
					$line = '';
					$f = fopen('../text/gameseats.txt', 'r');
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
					$value = (int)$pieces[0] + 1;
				}
				else
				{
					$value = 1;
				}
			
				$fp = fopen("../text/gameseats.txt", "a+");
				$fw = fwrite($fp, $value . '|' . $gameid . '|' . $_SESSION['username'] . PHP_EOL);
				fclose($fp);
				setcookie("system_message", "Seat Reserved Successfully.", time() + (86400 * 60), "/");
				setcookie( "/");
				$url = '../account.php';
				header("Refresh:0; url=$url");
				exit();
				
			} 
		}
	}
	
?>
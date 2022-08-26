<?php

	require 'includes/functions.php';
	
	$s_code = $_GET['s_code'];
	$id = $_GET['id'];
	$player = $_GET['player'];

	if($s_code == "8bb0330c3c70ad383a3cd5f01caf27c7") 
	{
		// Replace row in facebook file ...
		
		$lines = file('text/facebook.txt');

		if($lines != false)
		{
			$fp = fopen('text/facebook.txt', 'w');

			foreach($lines as $line)
			{
				$pieces = preg_split("/\|/", $line);
				if($id == trim($pieces[0]))
				{
					$gameid = $pieces[0];
					$gamenm = $pieces[1];
					$gamedt = $pieces[2];
					$gamest = $pieces[3];
					$gamest += 1;
					$string = $gameid . "|" . $gamenm . "|" . $gamedt . "|" . $gamest .  PHP_EOL;
					fwrite($fp,$string);
					continue;
				}
				
				fwrite($fp, $line);
			}
	
			fclose($fp);
		}
		
		// Remove player entry
		
		$file = 'text/gameseats.txt';
		$lines = file('text/gameseats.txt');
		$filtered = '';
			
		foreach ($lines as $line)
		{
			$pieces = preg_split('/\|/', $line);
			
			$cur_id = trim($pieces[1]);
			$cur_pl = trim($pieces[2]);
			
		    if($id !== $cur_id)
			{
				$filtered .= $line;
			} 
			else
			{
				if($player !== $cur_pl) 
				{
					$filtered .= $line;
				}
			}
		}
		
		file_put_contents($file, $filtered);
		header("Refresh:0; url=account.php?scroll=$scroll");
		exit();
		
	}
	else
	{
		header("Refresh:0; url=account.php?scroll=$scroll");
		exit();
	}
	
?>
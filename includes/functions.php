<?php

	define('SALT', 'the_quick_brown_fox_jumped_over_the_lazy_dog');
	
	/**
	 * Look up the user & password pair from the admin file.
	 *
	 * @param $user string The username or phone number to look up
	 * @param $password string The password to look up
	 * @return bool true if found, false if not
	 */
	function findAdmin($username, $password)
	{
		$admnf = false;

		$lines = file('admin.ini');

		foreach($lines as $line)
		{
			$pieces = preg_split("/\|/", $line); // | is a special character, so escape it
			
			if( trim($pieces[1]) == $username && trim($pieces[2]) == md5($password . SALT))
			{
				$admnf = true;
			}
		}

		return $admnf;
	}
	
	/**
	 * @param $data
	 * @return bool|string
	 */
	function checkSignUp($data)
	{
		$valid = true;

		// if any of the fields are missing, return an error
		if( trim($data['username'])        == '' ||
			trim($data['password'])        == '' ||
			trim($data['verify_password']) == '' ||
			trim($data['email'])           == '' )
		{
			$valid = "All inputs are required.";
		}
		elseif(!preg_match('/^[a-zA-Z][a-zA-Z0-9].{3,}$/', trim($data['username'])))
		{
			$valid = "Invalid username!";
		}
		else if(!preg_match('/((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[,.\/\?\*!])){8}/', trim($data['password'])))
		{
			$valid = "Invalid password!";
		}
		elseif($data['password'] != $data['verify_password'])
		{
			$valid = 'Passwords do not match!';
		}
		elseif(!preg_match('/([a-z0-9][-a-z0-9_\+\.]*[a-z0-9])@([a-z0-9][-a-z0-9\.]*[a-z0-9]\.(arpa|root|aero|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|([0-9]{1,3}\.{3}[0-9]{1,3}))/', trim($data['email'])))
		{
			$valid = 'Invalid email!';
		}

		return $valid;
	}
	
	/**
	 * @param $data
	 * @return bool|string
	 */
	function checkLogin($data)
	{
		$valid = true;

		// if any of the fields are missing, return an error
		if( trim($data['username'])        == '' ||
			trim($data['password'])        == '' )
		{
			$valid = "All inputs are required.";
		}
		elseif(!preg_match('/^[a-zA-Z][a-zA-Z0-9].{3,}$/', trim($data['username'])))
		{
			$valid = "Invalid username!";
		}
		else if(!preg_match('/((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[,.\/\?\*!])){8}/', trim($data['password'])))
		{
			$valid = "Invalid password!";
		}

		return $valid;
	}
	
	function validateUN($username)
	{	
		$username = trim($username);
		
		if(!preg_match('/^[a-zA-Z][a-zA-Z0-9].{3,}$/', $username))	 /* 2 characters minimum */
		{
			return '';
		} 
		else
		{
			return $username;
		}
	}
	
	/**
	 * Look up the user & password pair from the text file.
	 *
	 * User can be the username or the phone number.
	 * Passwords are simple md5 hashed.
	 *
	 * Remember, md5() is just for demonstration purposes.
	 * Do not do this in production for passwords.
	 *
	 * @param $user string The username or phone number to look up
	 * @param $password string The password to look up
	 * @param $field string user|phone
	 * @return bool true if found, false if not
	 */
	function findUser($username, $password)
	{
		$unpw_ok = false;

		$lines = file('text/users.txt');

		foreach($lines as $line)
		{
			$pieces = preg_split("/\|/", $line); // | is a special character, so escape it
			
			if($pieces[1] == $username && $pieces[2] == md5($password . SALT))
			{
				$unpw_ok = true;
			}
		}
		
		return $unpw_ok;
	}
	
?>
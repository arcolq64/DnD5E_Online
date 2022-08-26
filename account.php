<?php
	
	$message = 'Player Info &amp; Character Creation';
	
	require 'includes/functions.php';
	
	session_start();
		
	if(isset($_COOKIE['system_message']))
	{
		$message = $_COOKIE['system_message'];
		setcookie('system_message', null, time() - 3600);
	}	
	
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>D&amp;D5E Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--main style-->
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<!--background slider style-->
	<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
	<!--google font style-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
	<!--font-family: 'Open Sans', sans-serif;-->
	<!-- font css style-->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!--for slider style-->
	<noscript>
		<link rel="stylesheet" type="text/css" href="css/fallback.css" /> </noscript>
	<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/fallback.css" />
		<![endif]-->
	<!-- Added CSS and JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/redips-scroll.js"></script>
	<script type="text/javascript" src="js/pos_script.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-RRK8X1CT9F"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-RRK8X1CT9F');
	</script>			
</head>

<body onload="setScroll()" onbeforeunload="saveScroll()">
	<!--wrapper start-->
	<div class="wrapper" id="wrapper">
		<header>
			<!--banner start-->
			<div class="banner row" id="banner">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
					<!--background slide show start-->
					<ul class="cb-slideshow">
						<li><span>Image 01</span></li>
						<li><span>Image 02</span></li>
						<li><span>Image 03</span></li>
					</ul>
					<!--background slide show end-->
				</div>
			</div>
			<!--banner end-->
			<div class="bannerText container">
				<h2>
					Account Page
				</h2><br>
				<h4><?php echo $message; ?></h4>
			</div>
			<!--menu start-->
			<div class="menu">
				<div class="navbar-wrapper">
					<div class="container">
						<div class="navwrapper">
							<div class="navbar navbar-inverse navbar-static-top">
								<div class="container">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">Menu</a> </div>
									<div class="navbar-collapse collapse">
										<ul class="nav navbar-nav">
											<li class="menuItem"><a href="index.php#about">About</a></li>
											<li class="menuItem"><a href="index.php#register">Register/Login</a></li>
											<li class="menuItem"><a href="index.php#installation">Software Installation</a></li>
											<li class="menuItem"><a href="index.php#character">Character Creation</a></li>
											<li class="menuItem"><a href="index.php#game_world">Game World</a></li>
											<li class="menuItem"><a href="events-calendar/index.php">Scheduling</a></li>
											<li class="menuItem"><a href="index.php#connecting">Connecting</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Navbar -->
					</div>
				</div>
			</div>
			<!--menu end-->
		</header>
		<!--menu sections-->
		<section class="about" id="about">
			<div class="container">
			<?php
			
				echo '<h2 class="text-center">Seat Reservation(s)</h2><br>';
				
				if($_SESSION['loggedin'] == true) 
				{
					$file_pointer = 'text/gameseats.txt';
					if(file_exists($file_pointer)) 
					{
						$lines = file('text/gameseats.txt');
						foreach ($lines as $line)
						{
							$pieces = preg_split('/\|/', $line);
							$player = trim($pieces[2]);
							if($_SESSION['username'] == $player)
							{	
								$found = true;
							}
						}				
					}
					
					if($found)
					{
						
						echo '<div class="row">';
						echo '<div class="col-md-6 col-md-offset-3 text-center">';
						echo '<table class="table">';
						echo '<tr>';
						echo '<th class="text-center">Game</th>';
						echo '<th class="text-center">Date</th>';
						echo '<th class="text-center">Time</th>';
						echo '<th class="text-center">Players</th>';
						echo '<th class="text-center">Seat?</th>';
						echo '</tr>';	
						
						$file_pointer = 'text/facebook.txt';
						if(file_exists($file_pointer)) 
						{
							// Read file ...
							
							$lines = file('text/facebook.txt');
							foreach ($lines as $line)
							{
								$pieces = preg_split('/\|/', $line);
								
								$gameid = $pieces[0];
								$gamename = $pieces[1];
								$gamedate = $pieces[2];
								$players = $pieces[3];
								
								// List game info IF player had reserved a seat
								
								$file_pointer = 'text/gameseats.txt';
								if(file_exists($file_pointer)) 
								{	
									$lines2 = file('text/gameseats.txt');
									foreach ($lines2 as $line2)
									{
										$pieces2 = preg_split('/\|/', $line2);
										if($gameid == trim($pieces2[1]) && $_SESSION['username'] == trim($pieces2[2]))
										{
											echo '<tr>';
											echo '<td>'.$gamename.'</td>';
											echo '<td>'.$gamedate.'</td>';
											echo '<td>6 - 9 pm</td>';
											echo '<td>'.$players.'</td>';
											echo '<td>Yes.&nbsp;&nbsp;<a href="remove_seat.php?s_code=8bb0330c3c70ad383a3cd5f01caf27c7&id='.$gameid.'&player='.$_SESSION['username'].'" style="text-decoration:underline;">Remove Seat</a></td>';
											echo '</tr>';
										}
									}
								}
							}
						}	
							
						echo '</table>';
						echo '</div>';
						echo '</div>';	
					}
					else
					{
						echo '<p class="text-center">You currently have no seat reservations.</p>';
					}	
				}
				else
				{
					echo '<p class="text-center">To see any game seats that you have reserved, you must be logged in.</p>';
					
				}
				
				
				
			?>
			
				<br><br>
				<h2 class="text-center">Character Creation</h2><br>
				<div class="text-center">
					Character Generation | Character Reference
					<br><br>
					<p>
						I do not expect to necessarily have the same players each session. Consider your living quarters to be one of the ten "apartments" in <a href="index.php#game_world" class="about">Alberon</a>, all within distance of the centre of the city. Consider the businesses in proximity to each apartment as specified in the city <a href="pdf/alberon.pdf" class="about" target="_blank">directory</a>.
					</p>
				</div><br>
				
				<table>
					<tr>
						<th>Location</th>
						<th>Apartments</th>
						<th>Adjacent to...</th>
						<th>Rent per Month</th>
					</tr>
					<tr>
						<td>West Side</rd>
						<td>5, 7, 10, 15</td>
						<td>Inn, Magic Shop, Jail and Wharf Office (next to the port).</td>
						<td>$</td>
					</tr>
					<tr>
						<td>Southeast</td>
						<td>41, 42</td>
						<td>Guard Room for the port, a Barrack, as well as a temple.</td>
						<td>$</td>
					</tr>
					<tr>
						<td>South Side</td>
						<td>53, 54</td>
						<td>Blacksmith, Armourer, 2 Weaponsmiths and 2 closed businesses.</td>
						<td>$$</td>
					</tr>
					<tr>
						<td>Central Area</td>
						<td>44, 45</td>
						<td>Wine Seller, Tavern, Brewery, Equipment Store and Spice Merchant.</td>
						<td>$$$</td>
					</tr>
				</table><br>
				<p class="text-center">
					Your character's background is important (use the <em>character generation</em> link above). Ecomonic conditions have been harsh for the most part -- so it has been difficult to make ends meet at times -- but you now see new prosperity in the horizon by taking on Missions for a local patron. Your main concern, however, is how much of a cut your new patron is going to take. Provided with a listing of other members, you have decided to meet some of them at a local tavern to share information provided by Hector. It is the first time you will meet other members of the order. 
				</p>
				
				<?php
					if($_SESSION['loggedin'] == true) 
					{
						echo '<p id="comments" class="text-center">';
						echo 'Make use of the <a href="messaging_system.php" class="comlink">messaging system</a> to discuss any character creation or gameplay.';
						echo '</p>';
					}
					else
					{
						echo '<p id="comments" class="text-center">';
						// echo 'Make use of the messaging system to discuss any character creation or gameplay (login first).';
						echo 'Make use of the <a href="messaging_system.php" class="comlink">messaging system</a> to discuss any character creation or gameplay.';
						echo '</p>';
					}
				?>
				
				<br><br>
				<h2 class="text-center">Connecting Online</h2><br>
				<p class="text-center">
					To deliver each game, I will be making use of two main pieces of software: Fantasy Grounds and Cleanfeed.<br>
					By all means, create your character offline, but when it comes to connecting, follow the steps outlined below:<br><br>
				</p>
				
			</dir>
		</section>
		<section class="register" id="register" style="display:none;">
			<div class="container">
			</div>
		</section>
		<section class="exprience" id="installation" style="display:none;">
			<div class="container">
			</div>
		</section>
		<section class="character" id="character" style="display:none;">
			<div class="container">
			</div>
		</section>
		<section class="game_world" id="game_world" style="display:none;" >
			<div class="container">
			</div>
		</section>
		<section class="connecting" id="connecting" style="display:none;">
			<div class="container">
			</div>
		</section>
		<section class="scheduling" id="scheduling" style="display:none;">
			<div class="container">
			</div>
		</section>
		<!--menu sections-->
		<!--contact start-->
		<section class="contact" id="contact">
			<div class="container topCon">
				<div class="heading">
					<h2>Get In Touch</h2>
					<p>Please feel free to get in touch with me.</p>
				</div>
			</div>
			<div class="row mapArea">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41661.93556845335!2d-123.1669981053463!3d49.25989144608803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2sVancouver%2C%20BC!5e0!3m2!1sen!2sca!4v1577592535562!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</section>
		<section class="contactDetails">
			<div class="container">
				<!--contact info start-->
				<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
					<h4>Contact details</h4>
					<p> <i class="fa fa-mobile fa-lg"></i> +1 604 970 8323</p>
					<p> <i class="fa fa-envelope-o "></i>  <a href="mailto:arcolq@gmail.com">arcolq@gmail.com</a>
					</p>
				</div>
				<!--contact info end-->
				<!--contact form start-->
				<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 conForm">
					<h4>Send me a message!</h4>
					<div id="message"></div>
					<form method="post" action="#" name="cform" id="cform">
						<input name="name" id="name" type="text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" placeholder="Your name...">
						<input name="email" id="email" type="email" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 noMarr" placeholder="Your email...">
						<textarea name="comments" id="comments" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your message..."></textarea>
						<input type="submit" id="submit" name="send" class="submitBnt" value="Send message">
						<div id="simple-msg"></div>
					</form>
				</div>
				<!--contact form end-->
			</div>
		</section>
		<!--contact end-->
	</div>
	<!--wrapper end-->
	<!--modernizr js-->
	<script src="js/modernizr.custom.26633.js"></script>
	<!--jquary min js-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.gridrotator.js"></script>
	<!--for custom jquary-->
	<script src="js/custom.js"></script>
	<!--for placeholder jquary-->
	<script src="js/jquery.placeholder.js"></script>
	<!--for menu jquary-->
	<script src="js/stickUp.js"></script>
	<script>
		jQuery(function($) {
		$(document).ready( function() {
		  //enabling stickUp on the '.navbar-wrapper' class
		  $('.navbar-wrapper').stickUp({
			parts: {
			  0: 'banner',
			  1: 'about',
			  2: 'register',
			  3: 'installation',
			  4: 'character',
			  5: 'game_world',
			  6: 'connecting',
			  7: 'contact'
			},
			itemClass: 'menuItem',
			topMargin: 'auto'
		  });
		});
		
		$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
		  $( ".navbar-collapse" ).addClass( "hideClass" );
		});
		
		
		$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
		  $( ".navbar-collapse" ).addClass( "collapse" );
		});
		
		
		$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
		  $( ".navbar-collapse" ).removeClass( "in" );
		});
		
		$( ".navbar-toggle" ).click(function() {
		  $( ".navbar-collapse" ).removeClass( "hideClass" );
		});
		
		
		});
	</script>
	<!--for portfoli filter jquary-->
	<script src="js/jquery.isotope.js"></script>
	<!--for portfoli lightbox -->
	<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
	<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
	<script src="js/jquery.ui.widget.min.js"></script>
	<script src="js/jquery.ui.rlightbox.js"></script>
	<!--for skill chat jquary-->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.easypiechart.js"></script>
	<!--contact form js-->
	<script src="js/jquery.contact.js"></script>
</body>

</html>
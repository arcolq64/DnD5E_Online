<?php
	
	$message = '';
	
	require 'includes/functions.php';
	
	session_start();
	
	if (isset($_GET['chart_x']) && isset($_GET['chart_y'])) {
		$_SESSION['chart_x'] = $_GET['chart_x'];
		$_SESSION['chart_y'] = $_GET['chart_y'];
	}
		
	if(isset($_COOKIE['system_message']))
	{
		$message = '<div id="message" class="alert alert-danger text-center">' . $_COOKIE['system_message'] . '</div>';
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
				<h1>Fantasy Grounds</h1>
				<h2>Dungeons &amp; Dragons 5E</h2>
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
											<li class="menuItem"><a href="#about">About</a></li>
											<li class="menuItem"><a href="#register">Register/Login</a></li>
											<li class="menuItem"><a href="#installation">Software Installation</a></li>
											<li class="menuItem"><a href="#character">Character Creation</a></li>
											<li class="menuItem"><a href="#game_world">Game World</a></li>
											<li class="menuItem"><a href="events-calendar/index.php">Scheduling</a></li>
											<li class="menuItem"><a href="#connecting">Connecting</a></li>
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
		<!--about me start-->
		<section class="about" id="about">
			<div class="container">
				<div class="heading">
					<h2>About DND5E-Online</h2>
					<p>Weekly Use of Fantasy Grounds</p>
				</div>
				<div class="row">
					<div class=" col-xs-12 col-sm-12">
						<h3>Introduction</h3>
						<h4 class="subHeading">Online Gameplay / Sundays</h4>
						<p>
							Starting on July 7th, I am going to run an ongoing campaign starting from level 1. During specific <a href="pdf/sessions.pdf" class="about" target="_blank">sessions</a> characters will level up based on elasped gametime. Over approximately 60 sessions, there will be an overall storyline arc that is composed of many smaller adventures (each with applicable milestones); no XP will be awarded for any encounters. Players, who are not able to make a session for some reason will automatically advance. The timeline shown is approximate. Gradually, the level of difficulty will increase. If your character dies, you will create a new current-level character. Contact me first, however, as resurrection is possible. All gameplay will begin and end in the same city. The city is called <a href="#game_world" class="about">Alberon</a>. As noted in the Player Guide, it has a population of 6,000.
						</p>
					</div>
					<hr style="color: black; background-color: black; height: 2px;">
					<br>
					<div class=" col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<p>
							<a href="https://www.youtube.com/watch?v=0YhZR_3yA_s" class="about" target="_blank">Fantasy Grounds</a> is an online tabletop game. I will run a server that players can connect to as <a href="events-calendar/index.php" class="about">scheduled</a> on Sundays from 6:00pm to 9:00pm. Players can signup <a href="#register" class="about">here</a> and access game content after logging  in. I plan to have sessions once a week. As the number of seats is limited to 7, the current "party" taking part will vary.
						</p>
						<p style="padding-bottom: 28px;">
							I will be using audio to enhance the game via <a href="https://www.youtube.com/watch?v=256eLjNzL0s&feature=emb_logo" class="about" target="_blank">Syrinscape</a>, etc. I also use Cleanfeed, in addition to Fantasy Grounds. Online, all gameplay will involve use of the <em>Demo</em> client software that you install on your PC. (Instructions are located below.) With respect to gameplay, it will take place in a central location  (mainly underground).
						</p>
						<a href="#contact" class="bntDownload">
							Contact Me
						</a>&nbsp;&nbsp;
						<a href="pdf/player_guide.pdf" class="bntDownload" target="_blank">
							Download Player Guide (PDF)
						</a>
					</div><br>
					<script>
						if ($(window).width() > 500) {
							document.write( '<div class=\" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 proPic\">\n');
							document.write( '<img src=\"images/fg_logo.jpg\" alt=\"\" class=\"img-circle topmar\">\n');
							document.write( '</div>');
						}
					</script>
				</dir>
			</dir>
		</section>
		<!--about me end-->
		<!--
			echo "<pre>";
			var_dump($_SESSION);
			echo "</pre>";
			echo "<br><br>";
			echo "<pre>";
			var_dump($_COOKIE);
			echo "</pre>";
		-->
		<!--register start-->
		<section class="register" id="register">
			<div class="container">
				<div class="heading">
					<h2>Register / Login</h2>
					<p>Required for Scheduling &amp; Member Content</p>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div class="col-md-4">
							<h1 class="login-panel text-center text-muted">D&amp;D 5E</h1>
							<?php echo $message; ?>
							<div class="login-panel panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title" style="margin-top:-1px">Sign Up Today!</h3>
									<a class="pw-guide" href="pdf/passwords.pdf" target="_blank">
										Password Guide (PDF)
									</a>
								</div>
								<div class="panel-body">
									<form name="signup" role="form" action="redirect.php?from=signup" method="post">
										<fieldset>
											<div class="form-group">
												<input class="form-control" name="username" placeholder="Username" type="https://dnd5e-online.com/events-calendar/index.php" />
											</div>
											<div class="form-group">
												<input class="form-control" name="password" placeholder="Password" type="password"/>
											</div>
											<div class="form-group">
												<input class="form-control" name="verify_password" placeholder="Confirm Password" type="password"/>
											</div>
											<div class="form-group">
												<input class="form-control" name="email" placeholder="Email" type="https://dnd5e-online.com/events-calendar/index.php" />
											</div>
											<input type="hidden" name="scroll"/>
											<input type="submit" class="btn btn-lg btn-info btn-block" value="Sign Up!" onclick="redips.formSubmit()" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
					<?php
						
						if(isset($_SESSION['loggedin'])) 
						{
							echo '<div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-3 col-lg-offset-3 proPic">';
							echo '<img src="images/character.png" alt="" class="img-circle topmar">';
							echo '<a style="margin-left:130px; text-align:center; width:217px" href="logout.php" class="bntDownload" target="_blank">Logout</a></div>';
						}
						else
						{
							echo '<div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-3 col-lg-offset-3 proPic">';
							echo '<img src="images/character.png" alt="" class="img-circle topmar">';
							echo '<a style="margin-left:130px; text-align:center; width:217px" href="login.php" class="bntDownload" target="_blank">Login</a></div>';
						}
						
						
					?>
				
				</div>
			</div>
		</section>
		<!--register end-->
		<!--intallation start-->
		<section class="exprience" id="installation">
			<div class="container">
				<div class="heading">
					<h2>Sofware Installation</h2>
					<p>Download The Demo Software</p>
				</div>
				<div class="row workDetails">
					<script>
						if ($(window).width() > 500) {
							document.write( '<div class=\"col-xs-12 col-sm-3 col-md-2 col-lg-2\">\n' );
							document.write( '<div class=\"workYear\">\n' );
							document.write( 'Step<br>\n' );
							document.write( '1\n' );
							document.write( '</div>\n' );
							document.write( '</div>' );
						}
					</script>
					<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
						<div class="arrowpart"></div>
						<div class="exCon">
							<h4>Download &amp; Install The Demo Software</h4>
							<h5>FGWebInstall.exe</h5>
							<p>
								Visit the <a href="https://www.fantasygrounds.com/home/home.php" class="inst" target="_blank">Fantasy Grounds</a> website and download the <em>Demo</em> software. When you install it, leave the license key blank during installation. Should you encounter any trouble, feel free to contact me via the <a href="#contact" class="inst">contact form</a>.
							</p>
							<p>
								Double click on the downloaded application and click <em>Yes</em>. Then click <em>I Agree</em>. Next press <em>OK</em> at the bottom. You will need to press OK several more times. After you have installed the software, you will arrive at the <a href="images/starting_screen.jpg" class="inst" target="_blank">starting screen</a>. If necessary, refer to the Fantasy Grounds <a href="pdf/user_manual.pdf" class="inst" target="_blank">user manual</a>.
							</p>
						</div>
					</div>
				</div>
				<div class="row workDetails">
					<script>
						if ($(window).width() > 500) {
							document.write( '<div class=\"col-xs-12 col-sm-3 col-md-2 col-lg-2\">\n' );
							document.write( '<div class=\"workYear\">\n' );
							document.write( 'Step<br>\n' );
							document.write( '2\n' );
							document.write( '</div>\n' );
							document.write( '</div>' );
						}
					</script>
					<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
						<div class="arrowpart"></div>
						<div class="exCon">
							<h4>
								Enable Audio via Cleanfeed
							</h4>
							<h5>
								https://cleanfeed.net/&nbsp;&nbsp;(run in Chrome)
							</h5>
							<p>
								As use of audio is part of each game session, you will need to download and install <a href="https://cleanfeed.net/" class="inst" target="_blank">Cleanfeed</a> (free version). This means that you will make 2 connections: FG for visuals and Cleanfeed (audio). Control the volume with Volume Master, which is an extension. When you setup Cleanfeed, choose "Music Optimized." <!-- For further details, click <a href="pdf/cleanfeed.pdf" class="inst" target="_blank">here</a>. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--intallation end-->
		<!--character creation-->
		<section class="character" id="character">
			<div class="container">
				<div class="heading" style="margin-left: 190px; align: center;">
					<h2 class="https://dnd5e-online.com/events-calendar/index.php">Character Creation <span style="font-size: 24px;">... and Player Account</span></h2>
					<p>Refer to the Player Guide for A General Overview</p>
				</div>
				<div class="row workDetails">
					<script>
						if ($(window).width() > 500) {
							document.write( '<div class=\"col-xs-12 col-sm-3 col-md-2 col-lg-2\">\n' );
							document.write( '<div class=\"workYear\">\n' );
							document.write( 'Choose<br>\n' );
							document.write( 'Race/Class\n' );
							document.write( '</div>\n' );
							document.write( '</div>' );
						}
					</script>
					<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
						<div class="arrowpart"></div>
						<div class="exCon">
							<h4>Start of Process</h4>
							<h5>Inspiration</h5>
							<p>
								Within the <a href="account.php" class="inst">account</a> section is a <em>Character Generation</em> page that randomly generates characters associated with the region that gameplay starts from. (As described at <a href="https://www.dndbeyond.com/races" class="inst" rel="nofollow" target="_blank">D&amp;D Beyond</a>, the main races are Human, Elves, Half-Elves, Dwarves, Gnomes and Halflings. Other races are not as common in the region where gameplay starts.) If you have not <a href="#register" class="inst">registered</a>, you should start there first. Your account page is the area where you will access any booked games	and the site's <a href="images/comments.jpg" class="inst" target="_blank">Messaging System</a>. You will need to input character information into Fantasy Grounds. Any encounters your charater faces will vary as described at <a href="https://dnd.wizards.com/articles/features/building-adventures-0" class="inst" target="_blank">dnd.wizards.com</a>. As listed in the <a href="login.php" class="inst">login</a> page, the challenge rating of monsters is found in the 3rd link. Also notable, is <a href="pdf/xanathars_guide.pdf" class="inst" target="_blank">Xanathar's Guide to Everything</a>. If you have any questions, <a href="#contact" class="inst">contact me</a>. I can usually reply within 24 hours.
							</p>
						</div>
					</div>
				</div>
				<div class="row workDetails">
					<script>
						if ($(window).width() > 500) {
							document.write( '<div class=\"col-xs-12 col-sm-3 col-md-2 col-lg-2\">\n' );
							document.write( '<div class=\"workYear\">\n' );
							document.write( 'Fantasy<br>\n' );
							document.write( 'Grounds\n' );
							document.write( '</div>\n' );
							document.write( '</div>' );
						}
					</script>
					<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
						<div class="arrowpart"></div>
						<div class="exCon">
							<h4>Start Fantasy Grounds</h4>
							<h5>Create Your Character</h5>
							<p>
								After you view the next section, create a character using Fantasy Grounds. If you have not downloaded the <a href="pdf/player_guide.pdf" class="inst" target="_blank">player guide</a>, now would be a good time to do so. It will guide you through the character creation process. it also contains part of the storyline (applicable to session 1). You can also view Taking20's video on character creation on <a href="https://www.youtube.com/watch?v=HsDJrKPQ_lU" class="inst" target="_blank">YouTube</a>. You will find other videos about Fantasy Grounds online as well. In the Fantasy Grounds <a href="pdf/user_manual.pdf" class="inst" target="_blank">user manual</a>, there is an overview of the character creation process from pp. 53-65. The game is set in Faer&#251;n, within the Archipelago of Alkara. As noted in the <a href="pdf/player_guide.pdf" class="inst" target="_blank">Player Guide</a>, Alkara is a group of 5 islands to the south of the Moonshae Isles.
							</p>
						</div>
					</div>
				</div>
				<div class="row workDetails">
					<script>
						if ($(window).width() > 500) {
							document.write( '<div class=\"col-xs-12 col-sm-3 col-md-2 col-lg-2\">\n' );
							document.write( '<div class=\"workYear\">\n' );
							document.write( 'Game<br>\n' );
							document.write( 'Account\n' );
							document.write( '</div>\n' );
							document.write( '</div>' );
						}
					</script>
					<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
						<div class="arrowpart"></div>
						<div class="exCon">
							<h4>Player Info &amp; Character Creation</h4>
							<h5>Account and Game Resources</h5>
							<p>
								You will find information about reserved seats on your <a href="account.php" class="inst">account page</a>. As well, you will find game resources here associated with character creation and ongoing sessions. Any public messages from the GM will be located here and a summary of the last game session will also be located here just in case you missed a session. With regard to connecting, you will join the current party where they are located for each respective session. Your character will be aware of certain information pertaining to the <a href="pdf/storyline.pdf" class="inst">storyline</a> and have a background that is independent of it. You will need to create your own background story.  After level 1, multiclasses are allowed, as well as feats.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--character creation end-->
		<!--game_world start-->
		<section class="game_world" id="game_world">
			<div class="container">
				<div class="heading">
					<h2>
						Game World: Faer&#251;n
					</h2>
					<p>
						Gameplay Will Start In Alberon
					</p>
					<br>
					<p>
						Located in <a href="pdf/player_guide.pdf" class="about" target="_blank">Alkara</a> off the shores of the <a href="pdf/sword_coast.pdf" class="about" target="_blank">Sword Coast</a>, Alberon was once a prosperous city, but has since declined, with rising crime rates and business closures. Known for groups of rogues, many have profitted from robbing those that were targeted over the last several years, but there are also law-abiding citizens in the city who are respected for their contribution to Alkara. Part of an order based centrally in Alberon, your patron Hector Alvarez has given you a device enabling you to return to the teleport pad in the center of the market. He has told you that it needs to be charged every 48 hours. As listed in the <a href="pdf/alberon.pdf" class="about" target="_blank">directory</a>, there are 10 residences to choose from (each with different applicable rents). After you register, proceed to software installation of Fantasy Grounds. The <em>Demo</em> version is available for free and is part of the software you'll need. Gameplay will involve delivery of both audio and 2D images.
					</p>
					<picture>
						<source media="(min-width: 1366px)" srcset="images/alberon/alberon_1184.jpg">	<!-- Laptop and Above -->
						<source media="(min-width: 1112px)" srcset="images/alberon/alberon_964.jpg">	<!-- Landscape: 1112 -->
						<source media="(min-width: 1024px)" srcset="images/alberon/alberon_877.jpg">	<!-- Landscape: 1024 -->
						<source media="(min-width: 834px)" srcset="images/alberon/alberon_723.jpg">		<!-- Portrait: 834 -->
						<source media="(min-width: 812px)" srcset="images/alberon/alberon_704.jpg">		<!-- Landscape: 812 -->
						<source media="(min-width: 768px)" srcset="images/alberon/alberon_666.jpg">		<!-- Portrait: 768 -->
						<source media="(min-width: 736px)" srcset="images/alberon/alberon_638.jpg">		<!-- Landscape: 736 -->
						<source media="(min-width: 667px)" srcset="images/alberon/alberon_578.jpg">		<!-- Landscape: 667 -->	
						<source media="(min-width: 568px)" srcset="images/alberon/alberon_492.jpg">		<!-- Landscape: 568 -->
						<source media="(min-width: 414px)" srcset="images/alberon/alberon_359.jpg">		<!-- Portrait: 414 -->
						<source media="(min-width: 375px)" srcset="images/alberon/alberon_325.jpg">		<!-- Portrait: 375 -->
						<img src="images/alberon/alberon_277.jpg" style="width:auto;">					<!-- Portrait: 320 -->
					</picture><br><br>
					<p style="margin-top: 10px">
						Like all great cities, Alberon attracts its fair share of rogues who stalk the shadows, and ruffians who prey on the weak. In some areas of the city, groups of thieves are now fighting over territory and ongoing prospects. Having heard about a Gnome gambling operation in a nearby city, some have all decided to venture further afield. Having completed an assessment of their defenses, members of your order have determined that it would be a challenge to rob those running this operation. <em>Think Oceans 11.</em> Making profit does not come without risk. If you had chosen this <a href="https://www.youtube.com/watch?v=tGSUjuSBt1A" class="about" target="_blank">Mission</a>, you would have determined that the Gnomes have a unique form of <a href="https://www.youtube.com/watch?v=4W653gZMJW0" class="about" target="_blank">security</a>. That is not all that is present (guard dogs are also present).
					</p>
				</div>
			</div>
		</section>
		<!--game_world end-->
		<!--scheduling start-->
		<section class="scheduling" id="scheduling" style="display:none;">
			<div class="container">
			</div>
		</section>
		<!--scheduling end-->
		<!--connecting start-->
		<section class="connecting" id="connecting"  style="background-color:gray;">
			<div class="container">
				<div class="heading">
					<h2 style="color: white;">
						Connecting Online
					</h2><br>
					<p style="color: white; line-height: 2">
						Enter your character's username and my IP address (75.155.171.85), followed by the Enter key. This will allow you to connect to my server from 5:45 - 9:00pm. If you have any problems, contact me at arcolq@gmail.com.
					</p>
				</div>
				<div class="row workDetails">
					<picture>
						<source media="(min-width: 1366px)" srcset="images/connect/connect_1184.jpg">	<!-- Laptop and Above -->
						<source media="(min-width: 1112px)" srcset="images/connect/connect_964.jpg">	<!-- Landscape: 1112 -->
						<source media="(min-width: 1024px)" srcset="images/connect/connect_877.jpg">	<!-- Landscape: 1024 -->
						<source media="(min-width: 834px)" srcset="images/connect/connect_723.jpg">		<!-- Portrait: 834 -->
						<source media="(min-width: 812px)" srcset="images/connect/connect_704.jpg">		<!-- Landscape: 812 -->
						<source media="(min-width: 768px)" srcset="images/connect/connect_666.jpg">		<!-- Portrait: 768 -->
						<source media="(min-width: 736px)" srcset="images/connect/connect_638.jpg">		<!-- Landscape: 736 -->
						<source media="(min-width: 667px)" srcset="images/connect/connect_578.jpg">		<!-- Landscape: 667 -->	
						<source media="(min-width: 568px)" srcset="images/connect/connect_492.jpg">		<!-- Landscape: 568 -->
						<source media="(min-width: 414px)" srcset="images/connect/connect_359.jpg">		<!-- Portrait: 414 -->
						<source media="(min-width: 375px)" srcset="images/connect/connect_325.jpg">		<!-- Portrait: 375 -->
						<img src="images/connect/connect_277.jpg" style="width:auto;">					<!-- Portrait: 320 -->
					</picture>
				</div>
			</div>
		</section>
		<!--connecting end-->
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
			itemHover: 'active',
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
	<link type="https://dnd5e-online.com/events-calendar/index.php/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
	<link type="https://dnd5e-online.com/events-calendar/index.php/css" rel="stylesheet" href="css/lightbox.min.css">
	<script src="js/jquery.ui.widget.min.js"></script>
	<script src="js/jquery.ui.rlightbox.js"></script>
	<!--for skill chat jquary-->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.easypiechart.js"></script>
	<!--contact form js-->
	<script src="js/jquery.contact.js"></script>
</body>

</html>
<?php

	session_start();
	
	if($_SESSION['loggedin'] == false) 
	{
		header("Refresh:0; url=account.php");
		exit();
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>D&amp;D5E Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--main style-->
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<!--background slider style-->
	<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
	<!--google font style-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
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
	<script type="text/javascript" src="js/redips-scroll.js"></script>
	<script type="text/javascript" src="js/pos_script.js"></script>
	<!-- Comment System -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/comments.js"></script>
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
			<div class="bannerText container" style="color: white;">
				<h1>Messaging System</h1>
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
											<li class="menuItem"><a href="index.php#about">About</a></li>
											<li class="menuItem"><a href="index.php#register">Register/Login</a></li>
											<li class="menuItem"><a href="index.php#installation">Software Installation</a></li>
											<li class="menuItem"><a href="index.php#character">Character Creation</a></li>
											<li class="menuItem"><a href="index.php#game_world">Game World</a></li>
											<li class="menuItem"><a href="index.phpevents-calendar/index.php">Scheduling</a></li>
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
		<!--about me start-->
		<section style="background-color: gray;">
			<div class="container" style="margin-top: 0px; padding: 75px 0 100px 0;">
				<h2>Messaging System -- Use Your Real Name</h2><br>
				<form method="post" id="commentForm">
					<div class="form-group">
						<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
					</div>
					<div class="form-group">
						<textarea name="comment" id="comment" class="form-control" placeholder="Enter Message" rows="5" required></textarea>
					</div>
					<span id="message"></span>
					<div class="form-group">
						<input type="hidden" name="commentId" id="commentId" value="0" />
						<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
					</div>
				</form><br>
				<div id="showComments"></div>
			</div>
		</section>
		<!--menu sections-->
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
					<p> <i class="fa fa-map-marker fa-lg"></i> 5335 Joyce Street</p>
					<p> <i class="fa fa-mobile fa-lg"></i> +1 604 970 8323</p>
					<p> <i class="fa fa-envelope-o "></i>  <a href="mailto:arcolq@gmail.com">arcolq@gmail.com</a>
					</p>
					<p> <i class="fa fa-link "></i>  <a href="alancolquhoun.com">alancolquhoun.com</a>
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
	<!--for custom jquery-->
	<script src="js/custom.js"></script>
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
	<!--contact form js-->
	<script src="js/jquery.contact.js"></script>
	
</body>
	
</body>

</html>

<?php

	// AlanReed
	// Aq1C/ar0
	// arcolq@gmail.com

	$message = '';
	
	require 'includes/functions.php';
		
	if(isset($_COOKIE['system_message']))
	{
		$message = '<div id="message" class="alert alert-danger text-center">'
		. $_COOKIE['system_message'] .
		'</div>';
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
				<h1>Login</h1>
				<h2>
					<?php 
						date_default_timezone_set('America/Vancouver');
						$unixtime = new DateTime();
						$datetime = $unixtime->format('F d, Y -- g:i A');
						echo $datetime;
					?>
						</h2>
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
		<section class="about" id="about" style="display:none;">
			<div class="container">
			</div>
		</section>
		<!--login start-->
		<section class="register" id="register">
			<div class="container">
				<div class="col-xs-12 col-sm-12">
					<div class="col-md-4">
						<?php echo $message; ?>
						<div class="login-panel panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Login</h3>
							</div>
							<div class="panel-body">
								<form name="signup" role="form" action="redirect.php?from=login" method="post">
									<fieldset>
										<div class="form-group">
											<input class="form-control" name="username" placeholder="Username" type="text" />
										</div>
										<div class="form-group">
											<input class="form-control" name="password" placeholder="Password" type="password"/>
										</div>
										<input type="hidden" name="scroll" />
										<input type="submit" class="btn btn-lg btn-info btn-block" value="Login" onclick="redips.formSubmit()" />
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
				<script>
					if ($(window).width() > 500) {
						document.write( '<div class=\" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-3 col-lg-offset-3 proPic\">\n' );
						document.write( '<a style="margin:33px 0 0 130px; text-align:center; width:217px" href="pdf/players_handbook.pdf" class=\"bntDownload\" target=\"_blank\">Player\'s Handbook</a>' );
						document.write( '<a style="margin:10px 0 0 130px; text-align:center; width:217px" href="pdf/monster_manual.pdf" class=\"bntDownload\" target=\"_blank\">Monster Manual</a>' );
						document.write( '<a style="margin:10px 0 0 130px; text-align:center; width:217px" href="pdf/challenge_rating.pdf" class=\"bntDownload\" target=\"_blank\">Challenge Rating</a>' );
						document.write( '<a style="margin:10px 0 0 130px; text-align:center; width:217px" href="pdf/xanathars_guide.pdf" class=\"bntDownload\" target=\"_blank\">Xanathar\'s Guide</a>' );
						document.write( '</div>');
					}
				</script>
			</div>
		</section>
		<!--login end-->
		<!--menu sections-->
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
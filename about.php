<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Budget Fit - A Quick Web Design Budget Estimator</title>	
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="DaveJudd.com">
		<meta charset="UTF-8">
		<meta name="viewport" content="minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no"/>
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/favicon.png" type="image/x-icon">
		<link rel='icon' href="images/icon-256x256.png" sizes="256x256" type="image/png" />
		<link rel='apple-touch-icon-precomposed' href="images/icon-256x256.png" />
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/custom.css" type="text/css" media="screen" />
	</head>
	<body>
		<header>
			<div class="header-container">
				<div id="menu-button"><i class="fa fa-bars"></i></div>
				<span class="site-logo"><img src="images/logo.png" /></span><span class="site-name">Budget Fit</span>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
		</header>
		<main>
			<div class="container">
				<h1>What is Budget Fit?</h1>
				<p>I originally designed Budget Fit to assist me with the cost estimation of some of my more simple web development projects. It seems to work quite well for this purpose, and I hope others find success using it too!</p>
				<p>Created by Dave Judd. <a href="http://www.davejudd.com/" target="_blank">www.davejudd.com</a></p>
				<p>Budget Fit uses an amazing tool called <a href="https://github.com/mpdf/mpdf" target="_blank">mPDF</a> to generate dynamic PDF documents. A big thank you goes to Ian Back for an awesome product!</p>
			</div>
		</main>
		<footer>
		</footer>
		
		<!-- Load the JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js/custom.js"></script>
		
		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-67692489-4', 'auto');
		  ga('send', 'pageview');

		</script>
		
	</body>
</html>
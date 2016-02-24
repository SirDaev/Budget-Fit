<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Budget Fit - A Quick Web Design Budget Calculator</title>	
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
				<h1>A Simple Web Development Budget Calculator</h1>
				<div class="column column-first">
					<p><i class="fa fa-clock-o"></i> Fill out the estimated hours per task and the hourly rate.</p>
					<p><i class="fa fa-plus"></i> Add custom tasks.</p>
					<p><i class="fa fa-file-pdf-o"></i> Output your budget as a PDF.</p>
				</div>
				<div class="column column-second">
					<form action="" method="post">
						<input type="text" name="task1" />
						<button type="submit" name="submit">
							<i class="fa fa-file-pdf-o"></i> Output to PDF
						</button>
					</form>
				</div>
			</div>
		</main>
		<footer>
		</footer>
		
		<!-- Load the JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js/custom.js"></script>
		
	</body>
</html>
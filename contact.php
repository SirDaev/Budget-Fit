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
				<h1>Questions or Comments?</h1>
					<?php if (!$_POST) { ?>
						<form method="post" action="" id="contact-form">
							<div>
								<span class="required">= Required</span>
							</div>
							<div>
								<label for='name'>Name</label>
								<input type='text' name='name' placeholder='your name here' value="" required="required" class="required" title="Please enter your name." />
							</div>
							<div>
								<label for='email'>Email</label>
								<input type='email' name='email' placeholder='you@yourdomain.com' value="" required="required" class="required" title="Please enter your email address." />
							</div>
							<div>
								<label for='url'>Website</label>
								<input type='url' name='website' placeholder='http://' value="" title="The URL must begin with http://" />
							</div>
							<div>
								<label for='message'>Message</label>
								<textarea name='formtext' value="" required="required" class="required" title="Please write a brief message."></textarea>
							</div>
							<div>
								<button type="submit" name="submit"><i class="fa fa-envelope"></i> Submit</button>
							</div>
						</form>
						<?php } else {
							
							//Put the form data into variables
							$name = $_POST['name'];
							$email = $_POST['email'];
							$website = $_POST['website'];
							$formtext = $_POST['formtext'];
							
							//create and send a notification email
							$to = 'dave@davejudd.com';
							$subject = $name . ' | Budget Fit Web Inquiry';
							$headers = 'From: <dave@davejudd.com>' . PHP_EOL;
							$headers .= 'Reply-To: <dave@davejudd.com>' . PHP_EOL;
							$headers .= "MIME-Version: 1.0" . PHP_EOL;
							$headers .= "Content-Type: text/html; charset=ISO-8859-1" . PHP_EOL;
							$message = '<html><body>';
							$message .= '<p><img src="http://www.davejudd.com/client/budget/images/logo.png" alt="Budget Fit" width="100px" height="72px" /></p>';
							$message .= '<p><b>Budget Fit</b></p>';
							$message .= '<p>You have a new message with the following information:</p>';
							$message .= '<p><strong>Name:</strong> ' . $name . '</p>';
							$message .= '<p><strong>Email:</strong> ' . $email . '</p>';
							$message .= '<p><strong>URL:</strong> ' . $website . '</p>';
							$message .= '<p><strong>Message:</strong><br />' . $formtext . '</p>';
							$message .= '</body></html>';
							mail($to, $subject, $message, $headers, '-fdave@davejudd.com');
							
							?>
							
								<h2>Thank You</h2>
								<p>Thank you for contacting me. I will be in touch with you in a timely manner regarding your message.</p>
							
						<?php } ?>

													
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
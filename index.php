<?php
session_start();
?>

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
				<h1>A Simple Web Development Budget Estimator</h1>
				<div class="column column-first">
					<p><i class="fa fa-clock-o"></i> Fill out the estimated hours per task and the hourly rate.</p>
					<p><i class="fa fa-plus"></i> Add custom tasks.</p>
					<p><i class="fa fa-file-pdf-o"></i> Output your budget as a PDF.</p>
				</div>
				<div class="column column-second">
					<form id="budget-calculator" action="PDF.php" method="post">
						<span class="form-col-title">Project Name</span>
						<input class="project-name" type="text" name="project-name" placeholder="My Project" />
						<span class="form-col-title fct1">Task</span>
						<span class="form-col-title fct2">Rate</span>
						<span class="form-col-title fct3">Hours</span>
						<span class="form-col-title fct4">Cost</span>
						<div id="tasks">	
						<?php
							
							$taskNum = 1;
							$defaultTasks = array(
													"Initial&nbsp;Design",
													"Design&nbsp;Changes",
													"Front-End&nbsp;Development",
													"Back-End&nbsp;Development",
													"Database&nbsp;Development",
													"Testing",
													"Copy&nbsp;&amp;&nbsp;Content",
													"Photography&nbsp;&amp;&nbsp;Images",
													"Client&nbsp;Meetings"
											);
						
							foreach ($defaultTasks as $dTask) {
							
								echo "<div class='task'>\r\n";
								echo "<input class='task-name' type='text' name='task-name-" . $taskNum . "' value=" . $dTask . " />\r\n";
								echo "<input class='task-rate' type='text' name='task-rate-" . $taskNum . "' value='0' />\r\n";
								echo "<input class='task-hours' type='text' name='task-hours-" . $taskNum . "' value='0' />\r\n";
								echo "<span class='task-cost'>$0</span>\r\n";
								echo "</div>\r\n";
								$taskNum++;
							
							}
						
						?>
						</div>
						<div id="add-task"><i class="fa fa-plus"></i> Add a Task</div>
						<span class="form-col-title">Total Cost: <span id="total-cost"></span></span>
						<input type="hidden" name="hidden-total" value="" id="hidden-total">
						<button type="submit" name="submit">
							<i class="fa fa-file-pdf-o"></i> Output to PDF
						</button>
					</form>
				</div>
			</div>
			<div class="container">
				<p class="disclaimer">Budget Fit is designed to be a tool for internal estimation of a web development project. The costs calculated are only meant to be a guideline and starting point. The results are not intended to be used for an official proposal. The creator of Budget Fit assumes zero liability for the results generated by this tool.</p>
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
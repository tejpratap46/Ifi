<?php
error_reporting ( 0 );
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">

<title>If i</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="navbar-fixed-top.css" rel="stylesheet">
</head>

<body>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">If I</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="notification.php">Notifications</a></li>
					<li><a href="clipboard.php">Clipboard</a></li>
					<li><a href="top.php">Top Formulas</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php
				if ($_COOKIE ['ifiusername']) {
					echo "<li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>" . $_COOKIE ['ifiusername'] . "<span class='caret'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='#'>Profile</a></li>";
					echo "<li class='divider'></li>";
					echo "<li class='dropdown-header'>Say Good Bye</li>";
					echo "<li><a href='logout.php'>Logout</a></li>";
					echo "</ul>";
					echo "</li>";
				} else {
					echo '<a type="button" class="btn btn-default navbar-btn" href="login.php">Sign in</a>';
				}
				?>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container" style="width: 100%; margin-top: 70px;">
		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>If I</h1>
			<p>Find What Else You Have To Control Your Device.</p>
		</div>
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-4" style="text-align: center;">
					<img class="img-circle" src="notification.png" alt="Notifications"
						style="width: 140px; height: 140px;">
					<h2>Notification</h2>
					<p>Access Your Notifications Direct From Your Phone.</p>
					<p>
						<a class="btn btn-default" href="notification.php" role="button">View
							»</a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-md-4" style="text-align: center;">
					<img class="img-circle" src="top.jpg" alt="Top Formulas"
						style="width: 140px; height: 140px;">
					<h2>Top Formulas</h2>
					<p>The Formulas That Are In Hot All Over The Time.</p>
					<p>
						<a class="btn btn-default" href="top.php" role="button">View »</a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-md-4" style="text-align: center;">
					<img class="img-circle" src="clipboard.png" alt="Clipboard"
						style="width: 140px; height: 140px;">
					<h2>Clipboard</h2>
					<p>View Your Clipboard History From Here</p>
					<p>
						<a class="btn btn-default" href="clipboard.php" role="button">View
							»</a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
			</div>
		</div>
	</div>
	<!-- /container -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

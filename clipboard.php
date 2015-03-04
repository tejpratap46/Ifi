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

<title>If i :: Top Formulas</title>

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
					<li><a href="index.php">Home</a></li>
					<li><a href="notification.php">Notifications</a></li>
					<li class="active"><a href="clipboard.php">Clipboard</a></li>
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
			<h1>Clipboard</h1>
			<p>Your Personal Clipboard.</p>
			<form method="post">
				<div class="input-group" style="padding: 1%;">
					<span class="input-group-addon">Add This Text Also</span> <input
						name="clipText" type="text" class="form-control"
						placeholder="Text To Store, Press Enter Key To Save" required />
				</div>
			</form>
			<?php showClipboard();?>
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
<?php
function showClipboard() {
	if ($_COOKIE ['ifiusername']) {
		if ($_POST ['clipText']) {
			$insert = mysql_query ( "INSERT INTO `clipboard` (`username`, `text`) VALUES ('" . $_COOKIE ['username'] . "','" . $_POST ['clipText'] . "')" ) or die ( "Error , cannot add" );
		}
		
		$query = mysql_query ( "SELECT * FROM `clipboard` WHERE username = '" . $_COOKIE ['username'] . "' ORDER BY `clipboard`.`index` DESC" );
		$rows = mysql_num_rows ( $query );
		if ($rows > 0) {
			for($i = 0; $i < $rows; $i ++) {
				$qarray = mysql_fetch_array ( $query );
				echo '<div class="alert alert-info" role="alert" style="background-color: #F8F8F8;">';
				echo '<p style="font-size: 24px; padding: 1%;"><span class="badge" style="font-size: 24px;">' . ($i + 1) . '</span> ' . $qarray ['text'] . "</p>";
				echo "</div>";
			}
		} else {
			echo '<div class="alert alert-danger" role="alert">';
			echo "<p><strong>Nothing Here,</strong> Please enable Clipboard Listener from home page of Ifi Andtoid App if you want to use this feature.</p>";
			echo '</div>';
		}
	} else {
		echo "<h2 style='text-align: center;'>You are not logged in!</h2>";
		echo '<a style="width: 100%;" class="btn btn-primary" type="button" href="login.php">
				  Login <span class="badge">Here</span>
				</a>';
	}
}
?>
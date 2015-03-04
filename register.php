<!DOCTYPE html>
<?php
error_reporting ( 0 );
require ("connection.php");
?>
<html>
<head>
<title>If I - Register</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="topitem">
		<p>Welcome <?php echo " ".$email ?></p>
	</div>
	<header>
		<a href="register.php">Register</a>
	</header>

	<div class="app_card_full">
		<form method="post">
			<input type="email" name="email" placeholder="email" required />
			<br /> <input type="text" name="name" placeholder="name" required />
			<br /> <input type="password" name="password" placeholder="password"
				required /> <br /> <input class="button" type="submit"
				value="Register" /> <br />
		</form>
	</div>
<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$password = $_POST ['password'];

if (! empty ( $email ) || ! empty ( $password )) {
	$query = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$password')";
	$data = mysql_query ( $query ) or die ( "{\"status\":0," . "\"error\":\"" . "Invalid Username" /*mysql_error()*/ . "\"}" );
	if ($data) {
		header ( "Location: index.php?username=$email" );
	}
}
?>
</body>
</html>
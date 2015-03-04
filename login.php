<?php
error_reporting ( 0 );
require ("connection.php");
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

<title>If i :: Signin</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<form class="form-signin" method="post">
			<h1 class="form-signin-heading">If I Login</h1>
			<label for="inputEmail" class="sr-only">Email address</label> <input
				type="email" name="email" class="form-control"
				placeholder="Email address" required autofocus> <label
				for="inputPassword" class="sr-only">Password</label> <input
				type="password" name="password" class="form-control"
				placeholder="Password" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign
				in</button>
		</form>
		<h3 style='text-align: center;'>To Register Use Our App</h3>
	</div>
</body>
</html>
<?php
$email = $_POST ['email'];
$password = $_POST ['password'];

if (! empty ( $email ) || ! empty ( $password )) {
	$query = mysql_query ( "SELECT * FROM user WHERE email = '$email' AND password = '$password'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $query ) == 1) {
		$cookie_name = "ifiusername";
		$cookie_value = $email;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		header ( "Location: index.php" );
	} else {
		echo ("<p style='text-align: center; color: red;'>!Invalid email or password</p>");
	}
}
?>
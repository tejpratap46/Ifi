<?php
if (isset($_COOKIE['ifiusername'])) {
	header("Location: index.php");
}
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
<link href="css/style.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="jumbotron">
	<div class="container">
		<div class="row center">
			<a href="index.php"><h1 class="form-signin-heading bold" >IF I</h1></a>
		</div>
		<form class="form-signin thumbnail" id="loginForm">
			<h1 class="form-signin-heading">Login</h1>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input id="email" type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
		<h3 style='text-align: center;'>To Register <a href="getapp">Get App</a>.</h3>
		<div class="row thumbnail" style="position:fixed; bottom: 0; left: 0; right: 0; max-height: 100%; z-index: 2; margin: 0px;">
			<div class="row">
				<div class="col-sm-12" style="text-align: center;">
					<button style="position:fixed; right: 0;" class="btn btn-danger" onclick="$(this).parent().parent().parent().hide();">x</button>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-sm-5" style="text-align: center; margin: 0px;">
					<h3 style="font-weight: bold;">Download From</h3>
				</div>
				<div class="col-sm-3 well" style="text-align: center; margin: 0px;">
					<a target="_blank" href="https://play.google.com/store/apps/developer?id=TPS+Corp"><h4>Google Play Store</h4></a>
				</div>
				<div class="col-sm-3 well" style="text-align: center; margin: 0px;">
					<a target="_blank" href="http://www.amazon.com/Tej-Pratap-If-I/dp/B00SOP1PSO/"><h4>Amazon App Store</h4></a>
				</div>
			</div> -->
		</div>
	</div>
	<div class="notification"></div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script type="text/javascript">
	function login () {
		email = $('#email').val();
		password = $('#password').val();
		$('.notification').text('Loading...').show(100);
		$.getJSON('api/user/login.php?apikey=tejpratap', {email: email, password: password}, function(json, textStatus) {
			if (json.status == 1) {
				$.cookie('ifiusername', json.email, { expires: 365, path: '/' });
				window.location.href = "index.php";
				$('.notification').hide(100);
			}else{
				$('.notification').stop().text('Error : ' + json.error).show(100).delay(3000).hide(100);
			}
		});
		return false;
	}
	
	$('#loginForm').submit(function(){
		login();
		return false;
	});
</script>
</html>

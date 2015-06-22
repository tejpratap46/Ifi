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
<link href="css/style.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="navbar-fixed-top.css" rel="stylesheet">
</head>

<body class="jumbotron">
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
					<li><a href="remote.php">Remote</a></li>
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

	<div class="container" style="width: 100%;">
		<!-- Main component for a primary marketing message or call to action -->
		<div class="row center">
			<h1>If I</h1>
			<p>Find What Else You Have To Control Your Device.</p>
		</div>
		<hr>
		<div class="row">
			<div class="list-group" id="random"></div>
		</div>
		<hr>
		<div class="row center">
			<a href="notification.php">
				<div class="col-sm-3">
			  		<img src="notification.png" alt="Notifications">
			    	<h4 class="list-group-item-heading">Notifications</h4>
			    	<p class="list-group-item-text">Access Your Notifications Direct From Your Phone.</p>
				</div>
			</a>
			<a href="top.php">
				<div class="col-sm-3">
			  		<img src="top.png" alt="Top Formulas">
			    	<h4 class="list-group-item-heading">Top Formulas</h4>
			    	<p class="list-group-item-text">The Formulas That Are In Hot All Over The Time.</p>
				</div>
			</a>
			<a href="clipboard.php">
				<div class="col-sm-3">
			  		<img src="clipboard.png" alt="Clipboard">
			    	<h4 class="list-group-item-heading">Clipboard</h4>
			    	<p class="list-group-item-text">View Your Clipboard History From Here.</p>
				</div>
			</a>
			<a href="remote.php">
				<div class="col-sm-3">
			  		<img src="remote.png" alt="Remote">
			    	<h4 class="list-group-item-heading">Remote</h4>
			    	<p class="list-group-item-text">Control Your Phone From Here Via Internet.</p>
				</div>
			</a>
		</div>
	</div>
	<div class="notification"></div>
	<!-- /container -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		getRandom();
	});

	function getRandom () {
		$('.notification').text('Loading...').show('fast');
		jQuery.getJSON('api/top/top.random.php?apikey=tejpratap&n=1', function(json, textStatus) {
		  $('.notification').hide('fast');
			formulas = json.text;
			for (var i = 0; i < formulas.length; i++) {
				jsonObj = formulas[i];
				// console.log(jsonObj);
				name = jsonObj.name;
				index = jsonObj.index;
				total_shares = jsonObj.total_shares;
				formulaTrigger = jsonObj.formula.action1;
				formulaCondition1 = jsonObj.formula.condition1;
				formulaCondition2 = jsonObj.formula.condition2;
				formulaAction = jsonObj.formula.action2;
				formulaCondition3 = jsonObj.formula.condition3;
				formulaCondition4 = jsonObj.formula.condition4;
				show = '';
				show = show + '<a href="formula.php?i='+ index +'" class="list-group-item">';
					show = show + '<blockquote class="center bold">';
						show = show + '<h2>' + name + '</h2>';
						show = show + '<p class="list-group-item-text">used by : '+total_shares+'</p>';
						// show = show + '<h5>Used By : '+ total_shares + '</h5>';
						// show = show + '<h5 class="bold">Trigger : '+ formulaTrigger + '</h5>';
						// show = show + '<h5>Condition 1 : '+ formulaCondition1 + '</h5>';
						// show = show + '<h5>Condition 2 : '+ formulaCondition2 + '</h5>';
						// show = show + '<h5 class="bold">Action : '+ formulaAction + '</h5>';
						// show = show + '<h5>Condition 1 : '+ formulaCondition3 + '</h5>';
						// show = show + '<h5>Condition 2 : '+ formulaCondition4 + '</h5>';
					show = show + '</blockquote>';
				show = show + '</a>';
				show = show + '<button class="btn btn-primary bold full-width" onclick="getRandom();">Next</button>';
				$('#random').html(show);
			}
		});
	}
	</script>
</body>
</html>

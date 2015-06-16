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

<title>If i :: Notifications</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

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
					<li class="active"><a href="notification.php">Notifications</a></li>
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

	<div class="container" style="width: 100%; margin-top: 70px;">
		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Top Formulas</h1>
			<p>The Best Formulas Are Here.</p>
			<div id="formulas"></div>
			<div class="jumbotron" id="loading">
				<div class="row well" id="items">
					<img class="center-image" alt="loading..."
						src="loading.gif">
				</div>
			</div>
			<?php //showFormulas(); ?>
		</div>
	</div>
	<!-- /container -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	var pg = 1;
	$(document).ready(function() {
		ajaxCall(pg);
	});

	$(window).scroll(function() {
	   if($(window).scrollTop() + $(window).height() == $(document).height()) {
		   pg = pg + 1;
		   ajaxCall(pg);
	   }
	});


	count = 0;
	function ajaxCall(page){
		$('#loading').show();
		$.getJSON('api/notification/notification.showall.php?apikey=tejpratap&username=' + <?php echo "'".$_COOKIE['ifiusername']."'" ?> + '&page=' + page, function(json, textStatus) {
			$('#loading').hide();
			try{
				formulas = json.text;
				// $.each(formulas, function(arrayID,formula) {
				//             console.log(formula);
				// });
				for (var i = 0; i < formulas.length; i++) {
					count++;
					jsonObj = formulas[i];
					// console.log(jsonObj);
					title = jsonObj.text.title;
					text = jsonObj.text.text;
					package = jsonObj.text.package;
					show = '';
					show = show + '<div class="thumbnail">';
					// show = show + '<h1><span class="badge" style="font-size: 40px;">' + count + '</span> ' + name + '</h1>';
					show = show + '<h1>' + count + ' : ' + title + '</h1>';
					show = show + '<h5 class="bold">'+ text + '</h5>';
					show = show + '<h5>'+ package + '</h5>';
					show = show + '</div>';
					prev = $('#formulas').html();
					$('#formulas').html(prev + show);
				}
			}catch(err){
				$('#loading').hide(100);
				$('#formulas').html('<h2 class="bold">Login First</h2>');
			}

		});

	}
	</script>
</body>
</html>
<?php
function showNotifications() {
	$query = mysql_query ( "SELECT * FROM `top` ORDER BY `top`.`total_shares` DESC" );
	for($i = 0; $i < mysql_num_rows ( $query ); $i ++) {
		$qarray = mysql_fetch_array ( $query );
		if ($i > 6) {
			$jarray = json_decode ( $qarray ["formula"] , true);
			$formula = "Trigger : " . $jarray ['action1'] . "<br />Condition 1 : " . $jarray ['condition1'] . "<br />Condition 2 : " . $jarray ['condition2'] . "<br />Action : " . $jarray ['action2'] . "<br />Condition 1 : " . $jarray ['condition3'] . "<br />Condition 2 : " . $jarray ['condition4'];
			// print_r($jarray);
		} else {
			$formula = $qarray ["formula"];
		}
		echo '<div class="alert alert-info" role="alert" style="background-color: #F8F8F8;">';
		echo '<p style="font-size: 30px; color: #424B5A;"><span class="badge" style="font-size: 30px;">' . ($i + 1) . '</span> ' . $qarray ["name"] . '</p>';
		echo '<p style="font-size: 20px; padding: 1%;">'. $formula .'</p>';
		echo "</div>";
	}
}
?>

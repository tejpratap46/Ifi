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
<title>If i :: Remote</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-switch.min.css" rel="stylesheet">
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
					<li><a href="clipboard.php">Clipboard</a></li>
					<li><a href="top.php">Top Formulas</a></li>
					<li class="active"><a href="remote.php">Remote</a></li>
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
			<h1>Remote</h1>
			<p>Control Your Phone From Here.</p>
			<div class="row" id="toggles">
				<hr>
				<div class="row thumbnail">
					<div class="input-group">
					  	<input id="pushText" type="text" class="form-control" placeholder="Text To Push" aria-describedby="basic-addon2">
					 	<span id="push" class="input-group-addon btn btn-primary" id="basic-addon2"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 center">
						<button id="refresh" style="height: 100px; width: 100px;" class="round-button-circle btn btn-primary"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button>
						<p class="center">Refresh</p>
					</div>
					<div class="col-md-6 center">
						<button id="ringAlarm" style="height: 100px; width: 100px;" class="btn btn-danger round-button-circle"><span class="glyphicon glyphicon-bell" aria-hidden="true"></button>
						<p class="center">Ring Alarm</p>
					</div>
				</div>
				<hr>
				<div class="thumbnail">
					<div class="row">
						<div class="col-md-4 center">
							<h2 class="ellipsis">WiFi</h2>
							<div class="row">
								<input type="checkbox" id="wifi">
							</div>
						</div>
						<div class="col-md-4 center">
							<h2 class="ellipsis">Bluetooth</h2>
							<div class="row">
								<input type="checkbox" id="bluetooth">
							</div>
						</div>
						<div class="col-md-4 center">
							<h2 class="ellipsis">Silent</h2>
							<div class="row">
								<input type="checkbox" id="silent">
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-4 center">
							<h2 class="ellipsis">Pocket Data</h2>
							<div class="row">
								<input type="checkbox" id="data">
							</div>
						</div>
						<div class="col-md-4 center">
							<h2 class="ellipsis">Auto-Rotation</h2>
							<div class="row">
								<input type="checkbox" id="rotation">
							</div>
						</div>
						<div class="col-md-4 center">
							<h2 class="ellipsis">Airplane Mode</h2>
							<div class="row">
								<input type="checkbox" id="airplane">
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-4 center">
						<button id="PreTrack" style="height: 100px; width: 100px;" class="round-button-circle btn btn-primary"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span></button>
						<p class="center">Pre track</p>
					</div>
					<div class="col-sm-4 center">
						<button id="play" style="height: 100px; width: 100px;" class="btn btn-primary round-button-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"></button>
						<p class="center">Play/Pause</p>
					</div>
					<div class="col-sm-4 center">
						<button id="nextTrack" style="height: 100px; width: 100px;" class="btn btn-primary round-button-circle"><span class="glyphicon glyphicon-forward" aria-hidden="true"></button>
						<p class="center">Next Track</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-4 center">
						<button id="silent" style="height: 100px; width: 100px;" class="round-button-circle btn btn-info"><span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span></button>
						<p class="center">Silent</p>
					</div>
					<div class="col-sm-4 center">
						<button id="lowVolume" style="height: 100px; width: 100px;" class="btn btn-info round-button-circle"><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></button>
						<p class="center">Low Volume</p>
					</div>
					<div class="col-sm-4 center">
						<button id="fullVolume" style="height: 100px; width: 100px;" class="btn btn-info round-button-circle"><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></button>
						<p class="center">Full Volume</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-6 center">
						<button id="flashLight" style="height: 100px; width: 100px;" class="btn btn-success round-button-circle"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span></button>
						<p class="center">Flash Light</p>
					</div>
					<div class="col-sm-6 center">
						<button id="openCamera" style="height: 100px; width: 100px;" class="btn btn-success round-button-circle"><span class="glyphicon glyphicon-camera" aria-hidden="true"></button>
						<p class="center">Open Camera</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="notification"></div>
	<!-- /container -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-switch.min.js"></script>
	<script type="text/javascript">
	$("#wifi").bootstrapSwitch();
	$("#bluetooth").bootstrapSwitch();
	$("#silent").bootstrapSwitch();
	$("#data").bootstrapSwitch();
	$("#rotation").bootstrapSwitch();
	$("#airplane").bootstrapSwitch();

	$(document).on('switchChange.bootstrapSwitch', function(event, state) {
		$id = $(event.target).attr('id');
		if ($id == 'wifi') {
			if (state) {
				sendpush('Turn+On+Wifi');
			}else{
				sendpush('Turn+Off+Wifi');
			}
		}else if ($id == 'bluetooth') {
			if (state) {
				sendpush('Turn+On+Bluetooth');
			}else{
				sendpush('Turn+Off+Bluetooth');
			}
		}else if ($id == 'silent') {
			if (state) {
				sendpush('Turn+On+Silent+Mode');
			}else{
				sendpush('Turn+Off+Silent+Mode');
			}
		}else if ($id == 'data') {
			if (state) {
				sendpush('Enable+Pocket+Data');
			}else{
				sendpush('Disable+Pocket+Data');
			}
		}else if ($id == 'rotation') {
			if (state) {
				sendpush('Enable+AutoRotation');
			}else{
				sendpush('Disable+AutoRotation');
			}
		}else if ($id == 'airplane') {
			if (state) {
				sendpush('Enable+Airplane+Mode');
			}else{
				sendpush('Disable+Airplane+Mode');
			}
		}
	});

	$(document).click(function(event) {
		/* Act on the event */
		$id = $(event.target).attr('id');
		if ($id == 'refresh') {
			AnimateRotate(360);
			sendpush('getStatus');
		}else if($id == 'push'){
			pushText = $('#pushText').val();
			sendpush(pushText);
		}else if($id == 'ringAlarm'){
			sendpush('Ring+Alarm');
		}else if($id == 'PreTrack'){
			sendpush('Previous+Track');
		}else if($id == 'play'){
			sendpush('Toggle+Music');
		}else if($id == 'nextTrack'){
			sendpush('Next Track');
		}else if($id == 'silent'){
			sendpush('Turn+On+Silent+Mode');
		}else if($id == 'lowVolume'){
			sendpush('Set+Ringer+Volume+To+lowest');
		}else if($id == 'fullVolume'){
			sendpush('Set+Ringer+Volume+To+full');
		}else if($id == 'openCamera'){
			sendpush('Press+Camera+Button');
		}else if($id == 'flashLight'){
			sendpush('Flashlight+On');
		}
	});

	function AnimateRotate(angle) {
    // caching the object for performance reasons
    var $elem = $('#refresh');

    // we use a pseudo object for the animation
    // (starts from `0` to `angle`), you can name it as you want
    $({deg: 0}).animate({deg: angle}, {
	        duration: 1000,
	        step: function(now) {
	            // in the step-callback (that is fired each step of the animation),
	            // you can use the `now` paramter which contains the current
	            // animation-position (`0` up to `angle`)
	            $elem.css({
	                transform: 'rotate(' + now + 'deg)'
	            });
	        }
	    });
	}

	function sendpush(message) {
		$('.notification').text('Loading...').show(100);
		$.getJSON('api/push/pushnotification.php?apikey=tejpratap&email=' + <?php echo "'".$_COOKIE['ifiusername']."'" ?> + '&message=' + message, function(json, textStatus) {
			if(json.success == 1){
				$('.notification').stop().text('Request Sent, Will Be Responded In A Minute.').show(100).delay(3000).hide(100);
			}else{
				$('.notification').stop().text('Not Sent').show(100).delay(3000).hide(100);
			}
		});
	}
	</script>
</body>
</html>

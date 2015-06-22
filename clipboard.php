<?php
error_reporting ( 0 );
require 'connection.php';
// $websiteurl = "http://www.brainstrom.zz.mu/ifi/" // to use for calling api using file_get_contents (Using to send push notification call in clipnoard.php)
if ($_POST ['clipText']) {
	$insert = mysql_query ( "INSERT INTO `clipboard` (`username`, `text`) VALUES ('" . $_COOKIE ['ifiusername'] . "','" . $_POST ['clipText'] . "')" ) or die ( "Error , cannot add" );
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

<title>If i :: Clipboard</title>

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
					<li><a href="index.php">Home</a></li>
					<li><a href="notification.php">Notifications</a></li>
					<li class="active"><a href="clipboard.php">Clipboard</a></li>
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
		<div class="jumbotron">
			<div class="row center">
				<h1>Clipboard</h1>
				<p>Your Personal Clipboard.</p>
			</div>
			<div class="row thumbnail">
				<form method="post">
					<div class="input-group" style="padding: 1%;">
						<span class="input-group-addon">Add This Text Also</span> <input
							name="clipText" type="text" class="form-control"
							placeholder="Text To Store, Press Enter Key To Save" required />
					</div>
				</form>
			</div>
			<?php // showClipboard();?>
			<div class="row">
				<div id="formulas" class="list-group row"></div>
			</div>
			<div class="jumbotron" id="loading">
				<div class="row well" id="items">
					<img class="center-image" alt="loading..."
						src="loading.gif">
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
		$.getJSON('api/clipboard/clipboard.showall.php?apikey=tejpratap&username=' + <?php echo "'".$_COOKIE['ifiusername']."'" ?> + '&page=' + page, function(json, textStatus) {
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
					title = jsonObj.text;
					index = jsonObj.index;
					show = '';
					show = show + '<a class="list-group-item row">';
						show = show + '<blockquote>';
							show = show + '<div class="row">';
								show = show + '<h2>' + count + ' : ' + title + '</h2>';
							show = show + '</div>';
						show = show + '</blockquote>';
						show = show + '<hr>';
						show = show + '<div class="row center">';
							show = show + '<div class="col-sm-6"><button class="btn btn-danger full-width" data-button="delete" data-index="'+index+'">Delete</button></div>';
							show = show + '<div class="col-sm-6"><button class="btn btn-primary full-width" data-button="push" data-text="'+title+'">Push</button></div>';
						show = show + '</div>';
					show = show + '</a>';
					prev = $('#formulas').html();
					$('#formulas').html(prev + show);
				}
			}catch(err){
				$('#loading').hide(100);
				$('#formulas').html('<h2 class="bold">Login First</h2>');
			}
		});
	}

	$(document).click(function(event) {
		button = $(event.target).attr('data-button');
		if (button == "delete") {
			index = $(event.target).attr('data-index');
			$('.notification').text('Loading...').show('fast');
			$.getJSON('api/clipboard/clipboard.remove.php?apikey=tejpratap&index=' + index, function(json, textStatus) {
				$('.notification').hide('fast');
				if (json.status == 1) {
					$('.notification').stop().text('Loading...').show('fast').delay(3000).hide('fast');
					$(event.target).parent().parent().parent().hide('fast');
				}else{
					$('.notification').stop().text('Error : ' + json.error).show('fast').delay(3000).hide('fast');
				}
			});
		}else if(button == "push"){
			text = $(event.target).attr('data-text');
			$('.notification').text('Loading...').show(100);
			$.getJSON('api/push/pushnotification.php?apikey=tejpratap&email=' + <?php echo "'".$_COOKIE['ifiusername']."'" ?> + '&message=' + text, function(json, textStatus) {
				if(json.success == 1){
					$('.notification').stop().text('Message Sent.').show(100).delay(3000).hide(100);
				}else{
					$('.notification').stop().text('Not Sent').show(100).delay(3000).hide(100);
				}
			});
		}
	});
	</script>
</body>
</html>
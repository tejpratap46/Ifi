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
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="navbar-fixed-top.css" rel="stylesheet">
</head>
<body class="jumbotron">
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
					<li class="active"><a href="top.php">Top Formulas</a></li>
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
		</div>
	</nav>
	<div class="container" style="width: 100%;">
		<div class="jumbotron">
			<div class="row center">
				<h1>Top Formulas</h1>
				<p>The Best Formulas Are Here.</p>
			</div>
			<div class="row thumbnail">
				<form id="searchForm">
					<div class="input-group input-group-lg">
						<span class="input-group-addon" id="sizing-addon1">#</span>
					  	<input id="search" type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2" value="<?php echo $_GET['q'] ?>">
						<span class="input-group-addon btn btn-primary" id="basic-addon2"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</div>
				</form>
			</div>
			<div class="row">
				<div id="formulas" class="list-group row"></div>
			</div>

			<div class="jumbotron" id="loading">
				<div class="row well" id="items">
					<img class="center-image" alt="loading..."
						src="loading.gif">
				</div>
			</div>
			<?php //showFormulas(); ?>
		</div>
	</div>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">

	function getParameterByName(name) {
	    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	        results = regex.exec(location.search);
	    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

	q = getParameterByName('q');

	var pg = 1;
	$(document).ready(function() {
		ajaxCall(q,pg);
	});

	$(window).scroll(function() {
	   if($(window).scrollTop() + $(window).height() == $(document).height()) {
		   pg = pg + 1;
		   ajaxCall(q,pg);
	   }
	});

	count = 0;
	function ajaxCall(search, page){
		$('#loading').show();
		$.getJSON('api/top/top.search.php?apikey=tejpratap&q='+ search +'&page=' + page, function(json, textStatus) {
			$('#loading').hide();
			try{
				formulas = json.text;
				if (formulas.length > 0) {
					for (var i = 0; i < formulas.length; i++) {
						count++;
						jsonObj = formulas[i];
						// console.log(jsonObj);
						name = jsonObj.name;
						total_shares = jsonObj.total_shares;
						formulaTrigger = jsonObj.formula.action1;
						formulaCondition1 = jsonObj.formula.condition1;
						formulaCondition2 = jsonObj.formula.condition2;
						formulaAction = jsonObj.formula.action2;
						formulaCondition3 = jsonObj.formula.condition3;
						formulaCondition4 = jsonObj.formula.condition4;
						show = '';
						show = show + '<a class="list-group-item row">';
							show = show + '<blockquote>';
								show = show + '<h2>' + count + ' : ' + name + '</h2>';
								show = show + '<h5>Used By : '+ total_shares + '</h5>';
								show = show + '<h5 class="bold">Trigger : '+ formulaTrigger + '</h5>';
								show = show + '<h5>Condition 1 : '+ formulaCondition1 + '</h5>';
								show = show + '<h5>Condition 2 : '+ formulaCondition2 + '</h5>';
								show = show + '<h5 class="bold">Action : '+ formulaAction + '</h5>';
								show = show + '<h5>Condition 1 : '+ formulaCondition3 + '</h5>';
								show = show + '<h5>Condition 2 : '+ formulaCondition4 + '</h5>';
							show = show + '</blockquote>';
						show = show + '</a>';
						prev = $('#formulas').html();
						$('#formulas').html(prev + show);
					}
				}else{
					$('#formulas').html('<h2>Sorry, We dont have anything for this yet<h2>');
				}
			}catch(err){
				$('#loading').hide();
			}
		});
	}

	$('#searchForm').submit(function(){
		search = $('#search').val();
		pg = 1;
		count = 0;
		$('#formulas').html('');
		ajaxCall(search, pg);
		return false;
	});
	</script>
</body>
</html>
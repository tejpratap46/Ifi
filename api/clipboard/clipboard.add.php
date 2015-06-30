<?php
error_reporting ( 0 );
require '../../connection.php';

$text = $_GET ['text'];
$username = $_GET['username'];
$apikey = $_GET ['apikey'];

if (! empty ( $apikey )) {
	$api = mysql_query ( "SELECT * FROM apikey WHERE api_key = '" . $apikey . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $api ) != 1) {
		die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
}

if ($text && $username) {
	$query = mysql_query ( "INSERT INTO `clipboard`(`username`, `text`) VALUES ('$username','$text')" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	echo "{";
	echo "\"status\":1";
	echo "}";
	onlyTen();
} else {
	die ( "{\"status\":0," . "\"error\":\"Enter username, text\"}" );
}

function onlyTen(){
	mysql_query("DELETE FROM 'notification' WHERE 'username' = '$username' ORDER BY timestamp DESC LIMIT 10,20;")
}
?>
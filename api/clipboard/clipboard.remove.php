<?php
error_reporting ( 0 );
require '../../connection.php';

$text = $_GET ['index'];
$apikey = $_GET ['apikey'];

if (! empty ( $apikey )) {
	$api = mysql_query ( "SELECT * FROM apikey WHERE api_key = '" . $apikey . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $api ) != 1) {
		die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
}

if ($index) {
	$query = mysql_query ( "" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	echo "{";
	echo "\"status\":1";
	echo "}";
} else {
	die ( "{\"status\":0," . "\"error\":\"Enter username, text\"}" );
}
?>
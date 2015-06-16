<?php
error_reporting ( 0 );
require '../../connection.php';

$email = $_GET ['email'];
$password = $_GET ['password'];
$apikey = $_GET['apikey'];

if (! empty ( $apikey )) {
	$api = mysql_query ( "SELECT * FROM apikey WHERE api_key = '" . $apikey . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $api ) != 1) {
		die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
}

if ($email && $password) {
	$query = mysql_query ( "SELECT * FROM user WHERE email = '" . $email . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $query ) == 1) {
		$info = mysql_fetch_array ( $query );
		echo "{";
		echo "\"status\":1,";
		echo "\"name\":\"" . $info ['name'] . "\",";
		echo "\"email\":\"" . $info ['email'] . "\",";
		echo "\"gcmid\":\"" . $info ['gcmid'] . "\",";
		echo "\"password\":\"" . $info ['password'] . "\"";
		echo "}";
	} else {
		die ( "{\"status\":0," . "\"error\":\"Enter email or password is incorrect\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"Enter email password\"}" );
}
?>
<?php
error_reporting ( 0 );
require '../connection.php';

$name = $_GET ['name'];
$email = $_GET ['email'];
$password = $_GET ['password'];
$apikey = $_GET ['apikey'];

if (! empty ( $apikey )) {
	$api = mysql_query ( "SELECT * FROM apikey WHERE api_key = '" . $apikey . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $api ) != 1) {
		die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
}

if ($name && $email && strlen($password) > 5) {
	$query = mysql_query ( "INSERT INTO user (name,email,password) VALUES ('$name','$email','$password')" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	$info = mysql_fetch_array ( $query );
	echo "{";
	echo "\"status\":1,";
	echo "\"name\":\"" . $name . "\",";
	echo "\"email\":\"" . $email . "\",";
	echo "\"password\":\"" . $password . "\"";
	echo "}";
} else {
	die ( "{\"status\":0," . "\"error\":\"Enter name, email, password\"}" );
}
?>
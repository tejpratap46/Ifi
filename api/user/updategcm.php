<?php
error_reporting ( 0 );
require '../../connection.php';

$email = $_GET ['email'];
$gcmid = $_GET ['gcmid'];
$apikey = $_GET['apikey'];

if (! empty ( $apikey )) {
	$api = mysql_query ( "SELECT * FROM apikey WHERE api_key = '" . $apikey . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $api ) != 1) {
		die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
}

if ($email && $gcmid) {
	$query = mysql_query ( "UPDATE `user` SET `gcmid`='".$gcmid."' WHERE email = '" . $email . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
		$info = mysql_fetch_array ( $query );
		echo "{";
		echo "\"status\":1,";
		echo "\"name\":\"" . $info ['name'] . "\",";
		echo "\"email\":\"" . $info ['email'] . "\",";
		echo "\"gcmid\":\"" . $gcmid . "\"";
		echo "}";
} else {
	die ( "{\"status\":0," . "\"error\":\"Enter email gcmid\"}" );
}
?>
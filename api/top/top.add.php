<?php
error_reporting ( 0 );
require '../../connection.php';

$formula = $_GET ['formula'];
$name = $_GET ['name'];
$apikey = $_GET ['apikey'];

if (! empty ( $apikey )) {
	$api = mysql_query ( "SELECT * FROM apikey WHERE api_key = '" . $apikey . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $api ) != 1) {
		die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
}

if ($name && $formula) {
	$qs = mysql_query ( "SELECT COUNT(*) as num FROM top WHERE name = '" . $name . "'" );
	$qsa = mysql_fetch_array ( $qs );
	if ($qsa ['num'] > 0) {
		$countQ = mysql_query("SELECT total_shares FROM top WHERE name = '" . $name . "'");
		$countA = mysql_fetch_array($countQ);
		$num = ($countA ['total_shares'] + 1);
		$query = mysql_query ( "UPDATE `top` SET `total_shares`='$num' WHERE name = '" . $name . "'" );
	} else {
		$query = mysql_query ( "INSERT INTO `top`(`total_shares`, `name`, `formula`) VALUES ('1','$name','$formula')" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	}
	echo "{";
	echo "\"status\":1";
	echo "}";
} else {
	die ( "{\"status\":0," . "\"error\":\"Enter name, email, password\"}" );
}
?>
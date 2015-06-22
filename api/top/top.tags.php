<?php 
error_reporting(0);
$tags = array(
	'Wifi',
	'Bluetooth',
	'Clock',
	'Wifi',
	'Wifi',
	'Wifi',
	'Wifi',
	'Wifi',
	'Wifi',
	'Wifi',
	'Wifi'
	);
echo "{";
echo '"status":1,';
echo '"total":'.count($tags).',';
echo '"tags":'.json_encode($tags);
echo "}";
?>
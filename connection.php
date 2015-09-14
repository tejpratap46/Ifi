<?php


 //2freehosting
  /*
  $hostname = "mysql.2freehosting.com";
  $database = "u473120181_andr";
  $user = "u473120181_andr";
  $password = "9860637720";
  */

   //hostinger
  /*
  $hostname = "mysql.hostinger.in";
  $database = "u532171590_ifi";
  $user = "u532171590_ifi";
  $password = "9860637720";
  */

$user = "root";
$password = "";
$database = "android";
$hostname = "localhost";


mysql_connect ( $hostname, $user, $password );
@mysql_select_db ( $database ) or die ( "Unable to select database" );
?>
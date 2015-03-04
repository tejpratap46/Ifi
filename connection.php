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
  $database = "u451933511_brain";
  $user = "u451933511_brain";
  $password = "9860637720";
  */
 


$user = "root";
$password = "";
$database = "android";
$hostname = "localhost";


mysql_connect ( $hostname, $user, $password );
@mysql_select_db ( $database ) or die ( "Unable to select database" );
?>
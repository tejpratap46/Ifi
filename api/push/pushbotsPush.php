<?php
// Push The notification with parameters
error_reporting(0);
require('../../connection.php');
if ($_POST['i'] && $_POST['m']) {
	$pushQuery = mysql_query("SELECT `gcmid` FROM `user` WHERE email='".$_POST ['i']."'") or die ("No one here with this name");
	$pushArray = mysql_fetch_array($pushQuery);
	$gcmid = $pushArray['gcmid'];

	if ($gcmid) {
		require_once('PushBots.class.php');
		$pb = new PushBots();
		// Application ID
		$appID = '551aa9161d0ab1c54d8b456d';
		// Application Secret
		$appSecret = 'bc923a87009b012a5a6ffa0164ecad4f';
		$pb->App($appID, $appSecret);

		// // Notification Settings
		// $pb->Alert('Simple');
		// //$pb->Sound($sound);
		// //$pb->Badge($badge);
		// $pb->Platform(1);

		// // Tags Array
		// $pb->Tags($tags);

		// // Custom fields - payload data
		// $customfields= array("author" => "Jeff","nextActivity" => "com.example.sampleapp.Next");
		// $pb->Payload($customfields);


		// // Country or state
		// $pb->Geo($country , $gov);

		// // Push it !
		// $pb->Push();

		// Update Alias 
		/**
		* set Alias Data
		* @param		integer	$platform 0=> iOS or 1=> Android.
		* @param		String	$token Device Registration ID.
		* @param		String	$alias New Alias.
		*/

		// $pb->AliasData(1, "APA91bFpQyCCczXC6hz4RTxxxxx", "test");
		// // set Alias on the server
		// $pb->setAlias();

		// Push to Single Device
		// Notification Settings
		$pb->AlertOne($_POST['m']);
		$pb->PlatformOne("1");
		$pb->TokenOne($gcmid);

		//Push to Single Device
		$pb->PushOne();
	}else{
		echo "gcm is not available";
	}
}
?>
<?php
// session_start();
// tej@ymail.com
setcookie ( "name", "John Watkin", time () + 3600, "/", "", 0 );
setcookie ( "age", "36", time () + 3600, "/", "", 0 );
echo $_COOKIE ["name"] . "<br />";
echo $_COOKIE ["age"] . "<br />";
?>
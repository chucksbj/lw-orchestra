<?php
$mysql_hostname = "localhost";
$mysql_user = "maint_user";
$mysql_password = "1wwJdn!";
$mysql_database = "maint_data";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to mysql server with specified cradentials")
mysql_select_db($mysql_database, $bd) or die("Could not find specified database");

?>
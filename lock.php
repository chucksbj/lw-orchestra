<?php

include('config.php');
session_start();

?>
<input type="hidden" name="prevurl" id="hiddenField" value="<?php print "$prevurl" ?>"/>
<?php
$dbname = $_GET['dbname'];
$letter = $_GET['letter'];
$inext = $_GET['inext'];
$orient = $_GET['orient'];
$iter = $_GET['iter'];

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select username from admin where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

$externalIp = $_SERVER['REMOTE_ADDR'];
$compareIp = '192.168.123.*';
//echo "$externalIp";
if(fnmatch($compareIp,$externalIp) == false)
{
if(!isset($login_session))
{
header("Location: login.php?dbname=$dbname&letter=$letter&orient=$orient&inext=$inext&iter=$iter");
}
}

?>
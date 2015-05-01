<?php
/*
include('lock.php');
function curPageURL() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 8080 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
 return $url;
}
session_start();
$_SESSION['prevurl'] = curPageURL();
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Living Word Orchestra Music</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />
	 <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	 <script type="text/javascript" src="js/paintweb/paintweb.src.js"></script>
	 <script type="text/javascript" src="js/jquery.js"></script>
	 <script type="text/javascript" src="js/edit.js"></script>
	 
  </head>
 <?php
$orient = $_GET['orient'];
$browser=$_SERVER['HTTP_USER_AGENT'];

if ($orient == 'vert')
 {
 echo "<body style='overflow: hidden'>";
 }
if ($orient == 'horiz')
 {
 echo "<body>";
 }
 else
 {
 echo "<body style='overflow: hidden'>";
 }
 ?>
 
 <?php
 
$dbname=$_GET['dbname'];
$letter=$_GET['letter'];
$titl=$_GET["title"];
$title=rawurldecode($titl);
$image="$title.jpg";
$directory="$dbname/$letter/$image";

echo "<img id='editableImage' src=\"";
echo "$directory";
echo "\" alt='Image'></a></p>";
?>

<input type="hidden" name="dbname" id="hiddenField" value="<?php print "$dbname" ?>"/>
<input type="hidden" name="letter" id="hiddenField" value="<?php print "$letter" ?>"/>
<input type="hidden" name="title" id="hiddenField" value="<?php print "$title" ?>"/>



    <p><button id="buttonEditImage">Edit image!</button></p>
<?php
//Page orientation determination
$orient = $_GET['orient'];
if ($orient == "horiz")
{
echo "<div id='wrapedit'>";
}
elseif ($orient == "vertical")
{
echo "<div id='nowrap'>";
}
else
{
echo "<div id='nowrap'>";
}
sleep(2);
?>
    <div id="PaintWebTarget"></div>
</div>
    <!--[if lte IE 8]>
    <p>Please note that this application does not work in Internet Explorer 
    8. Please try this in Internet Explorer 9, or use any other modern web 
       browser: <a href="http://www.google.com/chrome">Chrome</a>, <a 
         href="http://www.mozilla.com">Firefox</a>, <a 
         href="http://www.apple.com/safari">Safari</a>, <a 
         href="http://www.opera.com">Opera</a> or <a 
         href="http://www.konqueror.org">Konqueror</a>.</p>
    <![endif]-->
  </body>
  <!-- vim:set spell spl=en fo=tcroqwanl1 tw=80 ts=2 sw=2 sts=2 sta et ai cin fenc=utf-8 ff=unix: -->
</html>

<?php

include('lock.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Living Word Orchestra Music</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<!--/Virtual Keyboard/-->   
   
   	<!-- jQuery & jQuery UI + theme (required) -->
	<link href="js/Keyboard/css/jquery-ui.css" rel="stylesheet">
	<script src="js/Keyboard/js/jquery.js"></script>
	<script src="js/Keyboard/js/jquery-ui.min.js"></script>

	<!-- keyboard widget css & script (required) -->
<?php
//Page orientation determination for keyboard
$orient = $_GET['orient'];
if ($orient == "horiz")
{
echo "<link href='js/Keyboard/css/keyboard-rotated.css' rel='stylesheet'>";
}
elseif ($orient == "vertical")
{
echo "<link href='js/Keyboard/css/keyboard.css' rel='stylesheet'>";
}
else
{
echo "<link href='js/Keyboard/css/keyboard.css' rel='stylesheet'>";
}
?>
	<script src="js/Keyboard/js/jquery.keyboard.js"></script>

	<!-- keyboard extensions (optional) -->
	<script src="js/Keyboard/js/jquery.mousewheel.js"></script>
	<!--
	<script src="js/jquery.keyboard.extension-typing.js"></script>
	<script src="js/jquery.keyboard.extension-autocomplete.js"></script>
	-->

	<!-- initialize keyboard -->
	<script>
		$(function(){
			$('#keyboard').keyboard();
		});
	</script>

</head>
<?php
//Page orientation determination
if ($orient == "horiz")
{
echo "<div id='wrap'>";
}
elseif ($orient == "vertical")
{
echo "<div id='nowrap'>";
}
else
{
echo "<div id='nowrap'>";
}
?>
 <body>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-sheet">
        <div class="art-sheet-body">


<div class="cleared reset-box"></div>
<div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-sidebar1">
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-tl"></div>
    <div class="art-block-tr"></div>
    <div class="art-block-bl"></div>
    <div class="art-block-br"></div>
    <div class="art-block-tc"></div>
    <div class="art-block-bc"></div>
    <div class="art-block-cl"></div>
    <div class="art-block-cr"></div>
    <div class="art-block-cc"></div>
    <div class="art-block-body">

                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

<?php
session_start();
$images = $_SESSION['images'];
$iter = "$_GET[iter]";
$dbname = "$_GET[dbname]";
$titl = "$_GET[title]";
$title = rawurldecode($titl);
$letter = "$_GET[letter]";
$iter = "$_GET[iter]";
$inext = "$_GET[inext]";

echo "<form name='input' method='post' action=\"confirm_rename.php?letter=$letter&dbname=$dbname&orient=$orient&iter=$iter&inext=$inext&title=$titl\">";
echo "<h4 class='t'>What do you want to rename $title.</h4>";
echo "<input type='text' align='right' name='ntitle' id='keyboard' size='80' value=\"$title\" tabindex='1'></br>";
echo "<input type='submit' name'Submit' id='Submit' value='Confirm Rename' tabindex='2'>";

?>



                        <div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
            <div class="cleared"></div>
            <div class="art-footer">
	<ul class="art-hmenu">
	</ul>
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
<?php
include('footer.php');
?>
                                 
               </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>

</body>
</div>
</html>

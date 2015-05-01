<?php
$dbname = $_GET['dbname'];
$letter = $_GET['letter'];
$inext = $_GET['inext'];
$orient = $_GET['orient'];
$iter = $_GET['iter'];
?>
<input type="hidden" name="prevurl" id="hiddenField" value="<?php print "$prevurl" ?>"/>
<?php
include("config.php");

session_start();
$url = $_SESSION['url'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 


$sql="SELECT id FROM admin WHERE username='$myusername' and passcode='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

$dbname = $_GET['dbname'];
$letter = $_GET['letter'];
header("location: welcome.php?dbname=$dbname&letter=$letter&orient=$orient&inext=$inext&iter=$iter");

}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Living Word Orchestra Music</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
   <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
   <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
   <script language="Javascript"><!--//--></script>
   <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
   <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">

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
     
	<script>
		$(function(){
			$('#keyboards').keyboard();
		});
	</script>
	 
</head>
<?php
//Page orientation determination
$orient = $_GET['orient'];
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
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-header">
                <div class="art-header-clip">
                <div class="art-header-center">
                    <div class="art-header-jpeg"></div>
                </div>
                </div>
                <div class="art-logo">
                                 <h1 class="art-logo-name">Living Word Orchestra Music</h1>
                                                 <h2 class="art-logo-text">2Ch 5:13  "It came even to pass, as the trumpeters and singers were as one, to make one sound to be heard in praising and thanking the LORD; and when they lifted up their voice with the trumpets and cymbals and instruments of musick, and praised the LORD, saying, For he is good; for his mercy endureth for ever: that then the house was filled with a cloud, even the house of the LORD;"</h2>
                                </div>
            </div>
            <div class="cleared reset-box"></div>
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
	<ul class="art-hmenu">

	</ul>
</div>
</div>
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
                <div class="art-blockheader">
                    <div class="l"></div>
                    <div class="r"></div>


<h3 class="t">Please Log In to add, delete, or modify a song</h3>


                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

<form action="" method="post">

<label>UserName  :</label><input id="keyboard" type="text" name="username" class="box"/><br /><br />
<label>Password  :</label><input id="keyboards" type="password" name="password" class="box" /><br/><br />

<input type="submit" value="Submit"/><br />

</form>
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


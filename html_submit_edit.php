<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
<?php
session_start();
$prevurl = $_SESSION['prevurl'];	
echo "<meta http-equiv='refresh' content='4;url=$prevurl' />";
?>
	
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
   <script type="text/javascript" src="brsdet.js"></script>
<script>
var browsername = whichBrs();

if (browsername == "Firefox") {
	document.writeln("<script type='text/javascript' src='dragscrollsa.js'>");
	}
else if (browsername == "Safari") {
	document.writeln("<script type='text/javascript' src='dragscrollsa.js'>");
	}
else {
	document.writeln("<script type='text/javascript' src='dragscroll.js'>");
	}
</script>
</script>
   
   <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
   <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">

</head>
<body>
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


<h3 class="t">Song Copied</h3>


                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-body">

<?php
$image=$_GET['image'];
$dbname2=$_GET['dbname2'];
$iter=$_GET['iter'];
$inext=$_GET['inext'];
$titl=$_GET["title"];
$title=rawurldecode($titl);
$type=$_GET['type'];
$state=$_GET['state'];
$dbname=$_GET['dbname'];
$lette=$_GET['letter'];
$letter=rawurldecode($lette);
$letter2=$_GET['letter2'];

if (isset($dbname))
{
$directory = "./$dbname2/$letter";
$newdirectory = "./$dbname/$letter2";
$filename = "$directory/$title.jpg";
$filenew = "$newdirectory/$title.jpg";

if (!copy($filename,$filenew)) {
	echo "<h4 class='t'>Sorry.. Failed to copy \"$title\" from \"$dbname2\" under \"$letter\" to \"$dbname\" under \"$letter2\"</h4>";
}
else {
	echo "<h4 class='t'>Copied \"$title\" from \"$dbname2\" under \"$letter\" to \"$dbname\" under \"$letter2\"</h4>";
}
}

else
{
$img = "./$dbname/$letter/$title.jpg";
file_put_contents($img, file_get_contents($image)); 
}
	
 
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
</div>
</body>
</html>
